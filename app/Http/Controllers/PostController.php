<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate();
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


        $slug = strtolower(str_replace(' ','-',$request->title));

        if($request->image == NULL){
            $imageName = 'blogImg.webp';
        }else{
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/photos'), $imageName);
        }

        $fields = [
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imageName,
            'body' => $request->body
        ];


        $posts = Auth::user()->posts()->create($fields);

        return redirect()->route('posts.index')->with('success','Post created successfully');




    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $slug = strtolower(str_replace(' ','-',$request->title));

        if($request->image == NULL){
            $imageName = $post->image;
        }else{
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/photos'), $imageName);
        }

        $fields = [
            'category=id' => $request->category,
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
