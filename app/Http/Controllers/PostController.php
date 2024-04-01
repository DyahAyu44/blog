<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin;

class PostController extends Controller
{
    public function index(): View
    {
        //get posts
        $posts = Admin::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}
