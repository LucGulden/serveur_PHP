<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function MonPanier()
    {
        
        $articles = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->join('contient','contient.id_commande','commande.id_commande')
        ->join('articles','articles.id_article','contient.id_article')
        ->where('users.id_users',1)
        ->where('commande.achevement_commande',0)
        ->get();


        return view('panier', [
            'articles' => $articles,
        ]);
    }
}