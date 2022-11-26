<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        //method 1 

        // $blog = new Blog();
        // $blog->title = $request->title;
        // $blog->content = $request->content;
        // $blog->save();

        //Method 2

        //Create fillable Model
        // Blog::create($request->only('title', 'content'));

        //Method 3 

        auth()->user()->blogs()->create($request->only('title', 'content'));

        return redirect()->route('blogs.index');
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $blog->update($request->only('title', 'content'));
        return redirect()->route('blogs.index');
    }
}
