<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    public function topvente()
    {
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);

        $databaseusers = DB::connection('mysql2')->table('users')
        ->join('role', 'role.id_role', '=', 'users.id_role')
        ->join('centre', 'role.id_centre', '=', 'users.id_centre')
        ->get();
        
        return view('accueil', [
            'articles' => $topvente,
            'databaseusers'=> $databaseusers,   
        ]);
    }
}
