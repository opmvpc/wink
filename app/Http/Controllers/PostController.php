<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $article = Post::where('slug', $slug)->first();
        // dd($article);

        return view('posts.show', [
            'article' => $article
        ]);
    }
}
