<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class FrontArticleController extends Controller
{
    public function index(){

        $articles = Article::orderby('date', 'desc')->get();
        return view('articles', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
    
        return view ('article', compact('article'));
    }
    
    
}
