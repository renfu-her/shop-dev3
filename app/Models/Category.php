<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id', 'description', 'sort_order'];

    // 獲取子分類
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')
            ->orderBy('sort_order', 'asc');
    }

    // 獲取父分類
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // 獲取頂層分類及其子分類
    public static function getMainCategories()
    {
        return self::where('parent_id', 0)
            ->orderBy('sort_order')
            ->with(['children' => function($query) {
                $query->orderBy('sort_order');
            }])
            ->get();
    }

    // 獲取該分類下的熱門商品
    public function getHotProducts($limit = 5)
    {
        return $this->products()
            ->where('is_hot', true)
            ->where('is_active', true)
            ->with('primaryImage')
            ->limit($limit)
            ->get();
    }
}
