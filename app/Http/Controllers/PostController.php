<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('users')->paginate(10);
        $categories = Category::all();
        return view('post.index', compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        $slug = Str::slug($request->title,'-');

        $imageName = $request->image ? time().'.'.$request->image->getClientOriginalExtension():'blogImg.webp';

        $fields = [
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imageName,
            'body' => $request->body
        ];

        Auth::user()->posts()->create($fields);
        return redirect()->route('posts.index')->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = Post::with('users')->findOrFail($post->id);
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category = Category::all();
        $post = Post::with('category')->findOrFail($post->id);
        $post->load('category');
        return view('post.edit',compact('post','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $slug = Str::slug($request->title,'-');
        $imageName = $request->image ? time().'.'.$request->image->getClientOriginalExtension():'blogImg.webp';

        $fields = [
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imageName,
            'body' => $request->body
        ];

        $post->update($fields);
        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }
}
