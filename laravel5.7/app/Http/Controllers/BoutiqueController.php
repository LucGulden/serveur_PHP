<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BoutiqueController extends Controller
{
    public function topvente()
    {
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);
        
        return view('boutique', [
            'articles' => $topvente
            
        ]);
    }
}
