<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aPropos()
    {
        $page = Page::where('title', 'À Propos')->first();
        // dd($page);

        return view('pages.about', [
            'page' => $page
        ]);
    }
}
