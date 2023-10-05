<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{

    public function rules():array{
        return [
            'lastname'=>'required',
            'firstname'=> 'required',
            'image'=> 'nullable',
            'position' => 'required',
            'description' => 'nullable',
            'status' => 'nullable',
        ];
    }

    public function index()
    {
        $members = Member::all();

        return view ('members.index', compact ('members'));
    }

     // create function 
     public function create()
     {
         return view('members.create');
     }
 
     public function store(Request $request)
     {
         $validData = $request->validate($this -> rules());
 
         if ($request->hasFile('image')) 
     {
                 $path = Storage::putFileAs('public', $request->image, $validData['lastname'].'.'.$request->image->extension());
                 $validData["image"] = $path;
     }
         
             Member::create($validData);
 
         return redirect()->route('members.index')
                         ->with ('success', 'Votre nouveau membre a bien été enregistré !');
      }

      //Show function
     public function show(Member $member)
     {
         return view('members.show', compact('member'));
     }

     // Edit function
    public function edit (Member $member)
    {
        return view('members.edit', compact('member'));

    }

    public function update(Request $request, Member $member)
    {
        $validData = $request->validate ($this -> rules());

       if ($request->hasFile('image')) 
    {
        $path = Storage::putFileAs('public', $request->image, $validData['lastname'].'.'.$request->image->extension());
        $validData["image"] = $path;
    }

        $member->update($validData);  

        return redirect()->route('members.index')
                       ->with ('success', 'Le membre à bien été mis à jour avec succès !');

    }


 //  Destroy function
 public function destroy (Member $member)
 {
    $member->delete();
    return redirect()->route('members.index')
                        ->with ('success', 'Le membre a été supprimé avec succès !');
 }
 
}
