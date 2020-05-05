<?php

namespace App\Http\Controllers;

use App\Projets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProjetsController extends Controller
{
   
    public function index()
    {
        $projets = Projets::all();
        return view('projets', compact('projets'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'image_url'     => 'required',
            'technology'    => 'required',
            'repo_url'      => 'required',
            'website_url'   => 'required',
            'categories_id' => 'required',
        ]);
        Projets::create($validatedData);
        return redirect('/projets')->with('success', 'Votre projet à été correctement enregistré.');
    }

    public function edit($id)
{
        $projets = Projets::findOrFail($id);

        return view('edit', compact('projets'));
}

public function update(Request $request, $id)
{
        $validatedData = $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'image_url'     => 'required',
            'technology'    => 'required',
            'repo_url'      => 'required',
            'website_url'   => 'required',
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
