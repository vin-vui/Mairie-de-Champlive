<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\View\View;

class FrontMemberController extends Controller
{
    public function index(){

        $members = Member::all();
        $mayor = Member::where('position','Maire')->first();
        $firstassistant = Member::where('position','Premier adjoint')->first();
        $secondassistant = Member::where('position','Deuxième adjoint')->first();
        $advisors = Member::where('position','Conseiller')->get();

        return view('members', compact('members','mayor', 'firstassistant','secondassistant', 'advisors'));
    }
}
