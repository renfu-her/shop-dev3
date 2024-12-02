<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::all();
        return view('admin.post-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.post-categories.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $request->merge(['is_active' => $request->boolean('is_active', false)]);

        PostCategory::create($request->all());

        return redirect()->route('admin.post-categories.index')
            ->with('success', '分類已成功新增');
    }

    public function edit(PostCategory $postCategory)
    {
        return view('admin.post-categories.edit', compact('postCategory'));
    }

    public function update(Request $request, PostCategory $postCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        $request->merge(['is_active' => $request->boolean('is_active', false)]);

        $postCategory->update($request->all());

        return redirect()->route('admin.post-categories.index')
            ->with('success', '分類已成功更新');
    }

    public function destroy(PostCategory $postCategory)
    {
        $postCategory->delete();

        return redirect()->route('admin.post-categories.index')
            ->with('success', '分類已成功刪除');
    }
}
