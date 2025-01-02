<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Services\ImageService;


class ProductController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $products = Product::with('category')->get();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::with('children')
            ->where('parent_id', 0)
            ->get();
        return view('admin.products.create', compact('categories'));
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        $specifications = ProductSpecification::orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'categories', 'specifications'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'cash_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'nullable|image|max:2048',
            'is_active' => 'boolean',
            'is_new' => 'boolean',
            'is_hot' => 'boolean',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'content' => 'required|string',
            'special_price' => 'nullable|numeric|min:0',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        $validated['is_new'] = $request->has('is_new') ? 1 : 0;
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        $validated['is_hot'] = $request->has('is_hot') ? 1 : 0;

        // 創建產品
        $product = Product::create($validated);


        // 處理主圖
        if ($request->hasFile('image')) {
            $image = $this->imageService->uploadImage(
                $request->file('image'),
                'products/' . $product->id
            );

            $product->update([
                'image' => $image
            ]);
        }

        // 處理多圖片
        if ($request->hasFile('additional_images')) {
            foreach ($request->file('additional_images') as $index => $image) {
                $filename = $this->imageService->uploadImage(
                    $image,
                    "products/{$product->id}"
                );

                $product->images()->create([
                    'image_path' => $filename,
                    'sort_order' => $index,
                    'is_primary' => false
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', '商品已創建');
    }


    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'price' => 'numeric|min:0',
            'cash_price' => 'nullable|numeric|min:0',
            'stock' => 'integer|min:0',
            'category_id' => 'exists:categories,id',
            'images.*' => 'nullable|image|max:2048',
            'is_active' => 'boolean',
            'is_new' => 'boolean',
            'is_hot' => 'boolean',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'special_price' => 'nullable|numeric|min:0',
        ]);

        if (isset($validated['name'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        $validated['is_new'] = $request->has('is_new') ? 1 : 0;
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        $validated['is_hot'] = $request->has('is_hot') ? 1 : 0;
        $product->update($validated);

        // 處理主圖
        if ($request->hasFile('image')) {
            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'products/' . $product->id
            );

            $product->update([
                'image' => $validated['image']
            ]);
        }

        // 處理多圖片
        if ($request->hasFile('additional_images')) {
            $maxOrder = $product->images()->max('sort_order') ?? -1;

            foreach ($request->file('additional_images') as $image) {
                $filename = $this->imageService->uploadImage(
                    $image,
                    "products/{$product->id}"
                );

                $product->images()->create([
                    'image_path' => $filename,
                    'is_primary' => false,
                    'sort_order' => ++$maxOrder
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', '商品已更新');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // 刪除主圖
        if ($product->image) {
            Storage::disk('public')->delete('products/' . $product->id . '/' . $product->image);
        }

        // 刪除商品附圖
        foreach ($product->images as $image) {
            Storage::disk('public')->delete('products/' . $product->id . '/' . $image->image_path);
        }

        // 刪除商品圖片目錄
        Storage::disk('public')->deleteDirectory('products/' . $product->id);

        // 刪除商品資料
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', '商品已刪除');
    }

    public function destroyImage(Request $request)
    {
        $imageId = $request->input('image_id');
        $product = Product::findOrFail($imageId);

        // 刪除主圖檔案
        if ($product->image) {
            Storage::disk('public')->delete('products/' . $product->id . '/' . $product->image);
        }

        // 更新資料庫，清空圖片欄位
        $product->update([
            'image' => null
        ]);

        return response()->json([
            'success' => true,
            'message' => '主圖已刪除'
        ]);
    }

    /**
     * 更新商品圖片排序
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function sortImages(Request $request, Product $product)
    {
        $imageIds = $request->input('image_ids', []);

        // 確保所有圖片都屬於當前商品
        $validImages = ProductImage::whereIn('id', $imageIds)
            ->where('product_id', $product->id)
            ->get()
            ->keyBy('id');

        // 根據傳入的 imageIds 順序更新排序
        foreach($imageIds as $index => $imageId) {
            if(isset($validImages[$imageId])) {
                $validImages[$imageId]->update(['sort_order' => $index + 1]);
            }
        }

        return response()->json([
            'success' => true,
            'message' => '圖片排序已更新'
        ]);
    }
}
