<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function rules():array
    {
        return [
            'title'=>'required',
            'content'=>'required',
            'image'=>'nullable',
            'date' =>'required',
            'location' =>'required',
            'description' =>'nullable',
            'status' =>'nullable', 
        ];
    }

    public function index()
    {
        $articles = Article::all();

        return view ('articles.index', compact('articles'));
    }

    // create function 
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        if ($request->hasFile('image')) 
    {
                $path = Storage::putFileAs('public', $request->image, $validData['title'].'.'.$request->image->extension());
                $validData["image"] = $path;
    }
        
            Article::create($validData);

        return redirect()->route('articles.index')
                        ->with ('success', 'Votre article a bien été enregistré !');
     }

     //Show function
     public function show(Article $article)
     {
         return view('articles.show', compact('article'));
     }

     
    // Edit function
    public function edit (Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validData = $request->validate($this->rules());

       if ($request->hasFile('image')) 
    {
        $path = Storage::putFileAs('public', $request->image, $validData['title'].'.'.$request->image->extension());
        $validData["image"] = $path;
    }
    
        $article->update($validData);

        return redirect()->route('articles.index')
                       ->with ('success', 'Article mis à jour avec succès !');

    }

    //  Destroy function
    public function destroy (Article $article)
    {
       $article->delete();
       return redirect()->route('articles.index')
                           ->with ('success', 'Article supprimé avec succès !');
    }
}
