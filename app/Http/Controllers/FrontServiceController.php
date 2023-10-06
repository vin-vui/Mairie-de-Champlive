<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\View\View;

class FrontServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        
        return view('services', compact('services'));
    }
}
