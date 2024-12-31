<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'category_id',
        'content',
        'sort_order',
        'is_active',
        'views',
        'seo_title',
        'seo_keywords',
        'seo_description',
        'image',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url('posts/' . $this->id . '/' . $this->image) : null;
    }
}
