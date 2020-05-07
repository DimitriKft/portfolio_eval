<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    public function create()
    {
        $cat = Categories::all();
        return view('categories.create', compact('cat'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'slug'   => 'required',
        ]);
        Categories::create($validatedData);
        return redirect('/home')->with('success', 'Votre articles à été correctement enregistré.', compact('articles'));
    }
    
}
