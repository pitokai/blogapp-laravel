<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('/posts/posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }
    public function show($id)
    {
        return view('/posts/post', [
            "title" => "Single Post",
            "post" => Post::find($id)
        ]);
    }
}
