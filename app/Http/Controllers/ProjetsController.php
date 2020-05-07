<?php

namespace App\Http\Controllers;

use App\Projets;
use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjetsController extends Controller
{
   
    public function index()
    {
        $projets = Projets::all();
        $cats = Categories::all();
        return view('projets.projets', compact('projets', 'cats'));
    }

    public function create()
    {
        $projets = Projets::all();
        $cats = Categories::all();
        return view('projets.create', compact('projets', 'cats'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'image_url'     => 'required',
            'technology'    => 'required',
            'repo_url'      => 'nullable',
            'website_url'   => 'nullable',
            'categories_id' => 'required',
        ]);
        Projets::create($validatedData);
        return redirect('/projets')->with('success', 'Votre projet à été correctement enregistré.');
    }

    public function edit($id)
    {
        $projets = Projets::findOrFail($id);
        $cats = Categories::all();
        return view('projets.edit', compact('projets', 'cats'));
    }

    public function show($id)
    {
        $projets = Projets::findOrFail($id);
        $cats = Categories::all();
        return view('projets.show', compact('projets', 'cats'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'image_url'     => 'required',
            'technology'    => 'required',
            'repo_url'      => 'nullable',
            'website_url'   => 'nullable',
            'categories_id' => 'required',
        ]);
        Projets::whereId($id)->update($validatedData);
        return redirect('/projets')->with('success', 'Votre projet à bien été édité');
    }

    public function destroy($id)
    {
        $projets = Projets::findOrFail($id);
        $projets->delete();
        return redirect('/projets')->with('success', 'Votre projet à bien été supprimé');
    }

}
