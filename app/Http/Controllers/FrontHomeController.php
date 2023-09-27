<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleController;
use App\Models\DeliberationController; 

class FrontHomeController extends Controller
{
    public function index()
    {
        $articles = Article::all()->latest()->limit(3)->get();
        $deliberations = Deliberation::all()->latest()-limit(4)->get();

        return view('home.index', compact('articles', 'deliberation'));

    }
}
