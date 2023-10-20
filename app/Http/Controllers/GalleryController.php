<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function rules():array
    {
        return [
            'title'=>'required',
            'image'=>'required',
        ];
    }

    public function index()
    {
        $galleries = Gallery::all();

        return view ('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        $path = Storage::putFileAs('public', $request->image,'.'.$request->image->extension());
        $validData["image"] = $path;

        $galleries = Gallery::create($validData);

        return redirect()->route('galleries.index')
        ->with ('success', 'Votre image a bien été enregistrée !');
    }

    public function show(Gallery $gallery)
     {
         return view('galleries.show', compact('gallery'));
     }

     public function edit (Gallery $galleries)
    {
        return view('galleries.edit', compact('galleries'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validData = $request->validate($this->rules());

        $path = Storage::putFileAs('public', $request->image,'.'.$request->image->extension());
        $validData["image"] = $path;

            $gallery->update($validData);

            return redirect()->route('galleries.index')
                       ->with ('success', 'Image mise à jour avec succès !');

    }

    public function destroy (Gallery $gallery)
    {
       $gallery->delete();
       return redirect()->route('galleries.index')
                           ->with ('success', 'Image supprimée avec succès !');
    }

}
