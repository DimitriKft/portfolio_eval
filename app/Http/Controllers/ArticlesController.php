<?php

namespace App\Http\Controllers;

use App\Articles;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
     public function index()
    {
        $articles = Articles::all();
        $users = User::all();
        return view('articles.articles', compact('articles', 'users'));
    }

    public function create()
    {
        $articles = Articles::all();
        $users = User::all();
        return view('articles.create', compact('articles', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'          => 'required',
            'description'   => 'required',
            'image_url'     => 'required',
            'user_id'    => 'required',
        ]);
        Articles::create($validatedData);
        return redirect('/articles')->with('success', 'Votre articles à été correctement enregistré.', compact('articles'));
    }

    public function edit($id)
    {
            $articles = Articles::findOrFail($id);
            $users = User::all();
            return view('articles.edit', compact('articles', 'users'));
    }

    public function show($id)
    {
            $articles = Articles::findOrFail($id);
            $users = User::all();
            return view('articles.show', compact('articles', 'users'));
    }

    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
                'title'          => 'required',
                'description'   => 'required',
                'image_url'     => 'required',
                'user_id'    => 'required',
            ]);
            Articles::whereId($id)->update($validatedData);

            return redirect('/articles')->with('success', 'Votre articles à bien été édité');
    }

    public function destroy($id)
    {
            $articles = Articles::findOrFail($id);
            $articles->delete();

            return redirect('/articles')->with('success', 'Votre articles à bien été supprimé');
    }
}
