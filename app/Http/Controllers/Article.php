<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class article extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view ('articles.index', compact ('articles'));
    }
}
