<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Deliberation; 

class FrontHomeController extends Controller
{
    public function index()
{
    $articles = Article::latest()->limit(3)->get();
    $deliberations = Deliberation::orderby('date', 'desc')->limit(4)->get();

    return view('home.index', compact('articles', 'deliberations'));
}

    
}
