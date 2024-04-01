<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'username' => 'required',
        ]);
  
        Post::create($request->all());
   
        return redirect()->route('posts.index')->with('success','created successfully.');
    }
    public function show(Post $admin)
    {
        return view('posts.show',compact('posts'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit',compact('posts'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'username' => 'required',
        ]);
  
        $post->update($request->all());
  
        return redirect()->route('posts.index')->with('success','updated successfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
  
        return redirect()->route('posts.index')->with('success','deleted successfully');
    }
}
