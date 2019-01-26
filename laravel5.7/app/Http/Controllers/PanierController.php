<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PanierController extends Controller
{
    public function MonPanier()
    {
        
        $articles = Article::get()
        ->join('contient','article.id_article','=','contient.id_article')
        ->join('commande','contient.id_commande','=','commande.id_commande')
        ->join('achete','commande.id_commande','=','achete.id_commande')
        ->where('achete.id_user',1)
        ->where('commande.achevement_commande',0);


        return view('panier', [
            'articles' => $articles,
        ]);
    }
}