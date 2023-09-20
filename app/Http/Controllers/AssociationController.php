<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;

class AssociationController extends Controller
{
    public function index()
    {
        $associations = Association::all();

        // return view('commentaries.index',compact('commentaries'));
    }
}
