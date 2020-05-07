<?php

namespace App\Http\Controllers;

use App\Categories;
use App\User;
use App\Projets;
use App\Articles;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        $members = User::all();
        return view('profile.profile',compact('members'));
    }

    
    public function edit($id)
    {
        $members = User::findOrFail($id);
        return view('profile.edit', compact('members'));
    }

   
    public function update(Request $request, $id)
    {
            $validatedData = $request->validate([
                'name'          => 'required',
                'email'         => 'required',
                'avatar'        => 'required',
            ]);
            User::whereId($id)->update($validatedData);

            return redirect('/profile/{id}')->with('success', 'Votre profil à bien été édité');
    }

    public function destroy($id)
    {
        //
    }
}
