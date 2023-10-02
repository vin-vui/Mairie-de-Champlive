<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deliberation;

class FrontDeliberationController extends Controller
{
   public function index(){

    $deliberations = Deliberation::orderby('date', 'desc')->get();
                    
    return view('deliberations', compact('deliberations'));
   }
}
