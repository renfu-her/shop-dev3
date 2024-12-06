<?php

namespace App\Services;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductService
{
    protected $product;
    protected $category;

    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function items($id = null)
    {
        try {
            // 獲取當前分類
            $currentCategory = null;
            $categories = null;
            $products = null;

            if ($id) {
                $currentCategory = $this->category->with('parent')->find($id);

                if (!$currentCategory) {
                    throw new \Exception('分類不存在');
                }

                // 獲取所有頂層分類及其子分類
                $categories = $this->category
                    ->where('parent_id', $currentCategory->parent_id)
                    ->with(['children' => function ($query) {
                        $query->orderBy('name');
                        $query->with(['children' => function ($q) {
                            $q->orderBy('name');
                        }]);
                    }])
                    ->orderBy('sort_order', 'asc')
                    ->get();

                // 獲取當前分類的產品，並確保加載主圖
                $products = $this->product
                    ->where('category_id', $id)
                    ->with('primaryImage')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
            } else {
                // 如果沒有指定分類 ID，獲取所有產品
                $categories = $this->category
                    ->where('parent_id', 0)
                    ->with(['children' => function ($query) {
                        $query->orderBy('name');
                        $query->with(['children' => function ($q) {
                            $q->orderBy('name');
                        }]);
                    }])
                    ->orderBy('sort_order', 'asc')
                    ->get();

                $products = $this->product
                    ->with('primaryImage')
                    ->orderBy('created_at', 'desc')
                    ->paginate(9);
            }

            return compact('currentCategory', 'categories', 'products');
        } catch (\Exception $e) {
            Log::error('[ProductService] items error: ' . $e->getMessage());
            throw $e;
        }
    }
}
