<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class AccueilController extends Controller
{
    public function topvente()
    {
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);

       
        
        return view('accueil', [
            'articles' => $topvente
            
        ]);
    }
}
