<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Post::live()
            ->with('author')
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(5);

        // dd($articles);
        return view('home.index', [
            'articles' => $articles
        ]);
    }
}
