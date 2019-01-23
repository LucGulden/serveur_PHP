<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function list_name_event()
    {
        $utilisateurs = App\Utilisateur::all();

        return view('evenementspasses', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
}
