<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newspaper;
use Illuminate\Support\Facades\Storage;

class NewspaperController extends Controller
{
    public function rules():array
    {
        return [
            'title'=>'required',
            'file'=>'required',
        ];
    }

    public function index()
    {
        $newspapers = Newspaper::orderBy('created_at', 'desc')->get();

        return view ('newspapers.index', compact('newspapers'));
    }

    public function create()
    {
        return view('newspapers.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        $path = Storage::putFileAs('public', $request->file,'.'.$request->file->extension());
        $validData["file"] = $path;

        $newspaper = Newspaper::create($validData);

        return redirect()->route('newspapers.index')
        ->with ('success', 'Votre journal a bien été enregistrée !');
    }

    public function show(Newspaper $newspaper)
    {
        return view('newspapers.show', compact('newspaper'));
    }

    public function edit (Newspaper $newspaper)
    {
        return view('newspapers.edit', compact('newspaper'));
    }

    public function update(Request $request, Newspaper $newspaper)
    {
        $validData = $request->validate($this->rules());

        $path = Storage::putFileAs('public', $request->file,'.'.$request->file->extension());
        $validData["file"] = $path;

            $newspaper->update($validData);

            return redirect()->route('newspapers.index')
                       ->with ('success', 'Journal mis à jour avec succès !');

    }

    public function destroy (Newspaper $newspaper)
    {
       $newspaper->delete();
       return redirect()->route('newspapers.index')
                           ->with ('success', 'Journal supprimé avec succès !');
    }
}
