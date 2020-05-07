<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projets;
use App\Articles;

class WelcomeController extends Controller
{
   
    public function index()
    {
        $projets = Projets::all();
        $articles = Articles::all();
        return view('welcome', compact('projets', 'articles'));
    }
  
}
