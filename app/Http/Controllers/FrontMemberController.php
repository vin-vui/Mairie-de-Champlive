<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\View\View;

class FrontMemberController extends Controller
{
    public function index(){

        $members = Member::all();

        return view('members', compact('members'));
    }
}
