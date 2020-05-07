<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projets;
use App\Categories;
use App\Articles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projets = Projets::all();
        $articles = Articles::all();
        return view('home', compact('projets', 'articles'));
    }
}
