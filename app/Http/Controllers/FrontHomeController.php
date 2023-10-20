<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Deliberation;
use App\Models\Gallery;
use App\Models\Newspaper;

class FrontHomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->limit(3)->get();
        $deliberations = Deliberation::orderby('date', 'desc')->limit(4)->get();

        return view('home.index', compact('articles', 'deliberations'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();

        return view('galleries', compact('galleries'));
    }

    public function newspaper()
    {
        $newspapers = Newspaper::all();

        return view('newspapers', compact('newspapers'));
    }
}
