<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomeAd extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'image',
        'link',
        'is_active',
        'sort_order',
        'image_thumb'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
} 