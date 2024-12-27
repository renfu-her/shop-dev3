<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function items($id = null)
    {
        // 從 service 獲取數據
        $data = $this->productService->items($id);

        return view('frontend.product.items', $data);
    }

    public function itemDetail($id)
    {
        // 獲取產品詳細信息，包括分類、主圖、所有圖片和規格
        $product = Product::with(['category.parent', 'primaryImage', 'images', 'specs'])
            ->findOrFail($id);

        // 獲取所有頂層分類及其子分類（用於側邊欄）
        $categories = Category::where('parent_id', 0)
            ->with(['children' => function ($query) {
                $query->orderBy('sort_order', 'asc');
                $query->with(['children' => function ($q) {
                    $q->orderBy('sort_order', 'asc');
                }]);
            }])
            ->orderBy('sort_order', 'asc')
            ->get();

        $currentCategory = $product->category;

        $specs = $product->specs;

        return view('frontend.product.detail', compact(
            'product',
            'categories',
            'currentCategory',
            'specs'
        ));
    }
}
