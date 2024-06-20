<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(2);
        return view('pages.posts.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('pages.posts.show');
    }
}
