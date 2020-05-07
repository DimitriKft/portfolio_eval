<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessageController extends Controller
{

    public function index()
    {
        $message = Messages::all();
        return view('message.message', compact('message'));
    }

    public function create()
    {
        $message = Messages::all();
        return view('message.create', compact('message'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required',
            'email'   => 'required',
            'message'     => 'required',
        ]);
        Messages::create($validatedData);
        return redirect('/')->with('success', 'Votre message ma correctement été transmis.', compact('message'));
    }

    public function destroy($id)
    {
        $message = Messages::findOrFail($id);
        $message->delete();

        return redirect('/')->with('success', 'Votre message à bien été supprimé', compact('messages'));
    }
}
