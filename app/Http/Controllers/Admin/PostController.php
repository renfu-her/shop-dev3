<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageService;

class PostController extends Controller
{

    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PostCategory::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:post_categories,id',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
            'seo_title' => 'nullable|string|max:70',
            'seo_keywords' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:155',
        ]);

        
        $validated['is_active'] = $request->boolean('is_active', false);

        $post = Post::create($validated);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'posts/' . $post->id
            );

            $post->update([
                'image' => $validated['image']
            ]);
        }

        return redirect()->route('admin.posts.index')->with('success', '文章創建成功！');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->increment('views');
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = PostCategory::where('is_active', true)->orderBy('sort_order')->get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:post_categories,id',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
            'seo_title' => 'nullable|string|max:70',
            'seo_keywords' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string|max:155',
        ]);


        if ($request->hasFile('image')) {
            // 刪除舊圖片
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }

            if ($request->hasFile('image')) {
                $validated['image'] = $this->imageService->uploadImage(
                    $request->file('image'),
                    'posts/' . $post->id
                );
            }
        }

        $validated['is_active'] = $request->boolean('is_active', false);

        $post->update($validated);

        return redirect()->route('admin.posts.index')->with('success', '文章更新成功！');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // 刪除關聯的圖片
        if ($post->image) {
            Storage::delete('public/' . $post->image);
        }

        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', '文章刪除成功！');
    }

    public function updateSort(Post $post, Request $request)
    {
        $request->validate([
            'sort_order' => 'required|integer|min:0'
        ]);

        $post->update(['sort_order' => $request->sort_order]);
        return response()->json(['success' => true]);
    }

    public function toggleActive(Post $post, Request $request)
    {
        $post->update(['is_active' => $request->is_active]);
        return response()->json(['success' => true]);
    }
}
