<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageService;

class CategoryController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $categories = Category::where('parent_id', 0)
            ->with(['children' => function ($query) {
                $query->orderBy('sort_order', 'asc');
            }])
            ->orderBy('sort_order', 'asc')
            ->withCount('products')
            ->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $parentCategories = Category::where('parent_id', 0)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('admin.categories.create', compact('parentCategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'required|integer|min:0',
            'sort_order' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        // 處理圖片上傳
        if ($request->hasFile('image')) {
            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'categories'
            );
        }

        Category::create($validated);

        return redirect()->route('admin.categories.index')
            ->with('success', '分類創建成功！');
    }

    public function edit(Category $category)
    {
        $parentCategories = Category::where('parent_id', 0)
            ->where('id', '!=', $category->id)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('admin.categories.edit', compact('category', 'parentCategories'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'required|integer|min:0',
            'sort_order' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        // 處理圖片上傳
        if ($request->hasFile('image')) {

            if ($category->image) {
                Storage::disk('public')->delete('categories/' . $category->image);
            }

            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'categories'
            );
        }

        $category->update($validated);

        return redirect()->route('admin.categories.index')
            ->with('success', '分類更新成功！');
    }

    public function destroy(Category $category)
    {
        if ($category->children()->exists()) {
            return redirect()->route('admin.categories.index')
                ->with('error', '無法刪除含有子分類的分類！');
        }

        // 刪除圖片
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', '分類刪除成功！');
    }
}
