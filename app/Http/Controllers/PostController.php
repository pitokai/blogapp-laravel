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
    public function show(Post $post)
    {
        return view('/posts/post', [
            "title" => "Single Post",
            //gabutuh ini kalo sudah menggunakan binding route model binding
            // "post" => Post::find($post->id)
            "post" => $post
        ]);
    }
}
