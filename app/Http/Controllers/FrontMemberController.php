<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\View\View;

class FrontMemberController extends Controller
{
    public function index(){

        $members = Member::all();
        $mayor = Member::where('position','maire')->first();
        $firstassistant = Member::where('position','Premier adjoint')->first();
        $secondassitant = Member::where('position','Deuxième adjoint')->first();
        $advisor = Member::where('position','Conseiller');

        return view('members', compact('members','mayor', 'firstassistant','secondassitant', 'advisor'));
    }
}
