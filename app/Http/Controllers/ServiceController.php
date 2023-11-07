<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

    public function rules(): array
    {
        return [
            'name' => 'required',
            'address' => 'required',
            'cp' => 'required',
            'city' => 'required',
            'mail' => 'nullable',
            'phone' => 'nullable',
            'description' => 'nullable',
            'status' => 'nullable',
        ];
    }

    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();

        return view('services.index', compact('services'));
    }

    // create function 
    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate($this->rules());

        Service::create($validData);

        return redirect()->route('services.index')
            ->with('success', 'Votre nouveau service a bien été enregistré !');
    }

    //Show function
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // Edit function
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));

    }


    public function update(Request $request, Service $service)
    {
        $validData = $request->validate($this->rules());

        $service->update($validData);

        return redirect()->route('services.index')
            ->with('success', 'Le service à bien été mis à jour avec succès !');

    }

    //  Destroy function
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')
            ->with('success', 'Le service a été supprimé avec succès !');
    }

}

