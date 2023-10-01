<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association; 
use Illuminate\View\View;

class FrontAssociationController extends Controller
{
    public function index()
    {
        $associations=Association::all();

        return view('associations', compact('associations'));
    }
}
