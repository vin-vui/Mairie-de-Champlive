<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;

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
                $path = Storage::putFileAs('public', $request->image, $validData['title'].'.'.$request->image->extension());
                $validData["image"] = $path;
    }
        
            Association::create($validData);

        return redirect()->route('asoociations.index')
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

    public function update(Request $request, Deliberation $deliberation)
    {
        $validData = $request->validate($this->rules());

       if ($request->hasFile('image')) 
    {
        $path = Storage::putFileAs('public', $request->image, $validData['title'].'.'.$request->image->extension());
        $validData["image"] = $path;
    }
    
        $deliberation->update($validData);

        return redirect()->route('deliberations.index')
                       ->with ('success', 'Association mise à jour avec succès !');

    }

    //  Destroy function
    public function destroy (Deliberation $deliberation)
    {
       $deliberation->delete();
       return redirect()->route('deliberations.index')
                           ->with ('success', 'Association supprimée avec succès !');
    }
}
