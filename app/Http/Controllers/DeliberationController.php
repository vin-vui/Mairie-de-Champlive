<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliberation;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DeliberationController extends Controller
{
    public function rules():array
    {
        return [
            'title'=>'required',
            'date'=>'required',
            'file'=>'required',
        ];
    }

    public function index()
    {
        $deliberations = Deliberation::all();

        return view ('deliberations.index', compact('deliberations'));
    }

    public function create()
    {
        return view('deliberations.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        $date = Carbon::parse($validData['date'])->format('d-m-Y');
        $path = Storage::putFileAs('public', $request->file, $date.'.'.$request->file->extension());
        $validData["file"] = $path;

        $deliberation = Deliberation::create($validData);

        return redirect()->route('deliberations.index')
        ->with ('success', 'Votre délibération a bien été enregistrée !');
    }

     //Show function
     public function show(Deliberation $deliberation)
     {
         return view('deliberations.show', compact('deliberation'));
     }

     // Edit function
    public function edit (Deliberation $deliberation)
    {
        return view('deliberations.edit', compact('deliberation'));
    }

    public function update(Request $request, Deliberation $deliberation)
    {
        $validData = $request->validate($this->rules());

        $date = Carbon::parse($validData['date'])->format('d-m-Y');
        $path = Storage::putFileAs('public', $request->file, $date.'.'.$request->file->extension());
        $validData["file"] = $path;

            $deliberation->update($validData);

            return redirect()->route('deliberations.index')
                       ->with ('success', 'Délibération mise à jour avec succès !');

    }

     //  Destroy function
     public function destroy (Deliberation $deliberation)
     {
        $deliberation->delete();
        return redirect()->route('deliberations.index')
                            ->with ('success', 'Délibération supprimée avec succès !');
     }

   
}
