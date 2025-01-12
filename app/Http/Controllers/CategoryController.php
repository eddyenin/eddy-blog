<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {}
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required','max:255',
        ]);

        Category::create($validated);
        return redirect()->route('category.create')->with('success','Category created succesfully');
    }
}
