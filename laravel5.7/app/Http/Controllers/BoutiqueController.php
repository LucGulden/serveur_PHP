<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Categorie;

class BoutiqueController extends Controller
{
    public function topvente()
    {
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);
        
        $articles = Article::get();

        $categories = Categorie::get();

        return view('boutique', [
            'topventes' => $topvente,
            'articles' => $articles,
            'categories'=>$categories,
        ]);
    }
}