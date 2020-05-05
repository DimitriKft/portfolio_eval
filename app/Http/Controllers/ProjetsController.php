<?php

namespace App\Http\Controllers;

use App\User;
use App\Projets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProjetsController extends Controller
{
    public function projets(Request $request)
    {
        $projets = DB::table('projets')->get();

        return view('projets', [
            'projets' => $projets
        ]);
    }

    public function show()
    {
         $data = request()->validate([
            'name'                  => 'required|min:3',
            'description'           => 'required|min:3',
            'image_url'             => 'required|min:3',
            'technology'            => 'required|integer',
            'repo_url'              => 'required|min:3',
            'website_url'           => 'required|min:3',
            'categories_id'         => 'required|min:3',
            'created_at'            => 'required|min:3',
            'updated_at'            => 'required|min:3'
        ]);

            Projets::create($data);

            return redirect('projets');
    }

}
