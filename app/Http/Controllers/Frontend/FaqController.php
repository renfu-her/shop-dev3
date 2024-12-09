<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FaqCategory;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $category = FaqCategory::where('is_active', true)
            ->where('title', '常見問題')
            ->first();

        $faqs = Faq::where('is_active', true)
            ->where('category_id', $category->id)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.faq.index', compact('faqs', 'category'));
    }
} 