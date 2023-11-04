<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Deliberation;
use App\Models\Gallery;
use App\Models\Newspaper;
use App\Models\Association;
use App\Models\Member;
use App\Models\Service;

class FrontHomeController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->limit(3)->get();
        $deliberations = Deliberation::orderby('date', 'desc')->limit(4)->get();

        return view('home.index', compact('articles', 'deliberations'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();

        return view('galleries', compact('galleries'));
    }

    public function newspaper()
    {
        $newspapers = Newspaper::all();

        return view('newspapers', compact('newspapers'));
    }

    public function association()
    {
        $associations = Association::all();

        return view('associations', compact('associations'));
    }

    public function deliberation()
    {

        $deliberations = Deliberation::orderby('date', 'desc')->get();

        return view('deliberations', compact('deliberations'));
    }

    public function member()
    {

        $members = Member::all();
        $mayor = Member::where('position', 'Maire')->first();
        $firstassistant = Member::where('position', 'Premier adjoint')->first();
        $secondassistant = Member::where('position', 'Deuxième adjoint')->first();
        $advisors = Member::where('position', 'Conseiller')->get();

        return view('members', compact('members', 'mayor', 'firstassistant', 'secondassistant', 'advisors'));
    }

    public function service()
    {
        $services = Service::all();

        return view('services', compact('services'));
    }
}
