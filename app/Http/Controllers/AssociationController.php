<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\Storage;

class AssociationController extends Controller
{
    public function rules():array
    {
        return [
            'name'=>'required',
            'presentation'=>'required',
            'image'=>'nullable',
        ];
    }

    public function index()
    {
        $associations = Association::all();

        return view('associations.index',compact('associations'));
    }


    // Create function
    public function create()
    {
        return view('associations.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        if ($request->hasFile('image')) 
    {
                $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
                $validData["image"] = $path;
    }
        
            Association::create($validData);

        return redirect()->route('associations.index')
                        ->with ('success', 'Votre association a bien été enregistrée !');
     }

     //Show function
     public function show(Association $association)
     {
         return view('associations.show', compact('association'));
     }

     // Edit function
    public function edit (Association $association)
    {
        return view('associations.edit', compact('association'));
    }

    public function update(Request $request, Association $association)
    {
        $validData = $request->validate($this->rules());

       if ($request->hasFile('image')) 
    {
        $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
        $validData["image"] = $path;
    }
    
        $association->update($validData);

        return redirect()->route('associations.index')
                       ->with ('success', 'Association mise à jour avec succès !');

    }

    //  Destroy function
    public function destroy (association $association)
    {
       $association->delete();
       return redirect()->route('associations.index')
                           ->with ('success', 'Association supprimée avec succès !');
    }
}
