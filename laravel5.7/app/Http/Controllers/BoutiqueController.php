<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Article;
use App\Categorie;
use App\Contient;
use App\Achete;
use Illuminate\Support\Facades\DB;


class BoutiqueController extends Controller
{
    public function topvente()
    {
        $topvente = Article::get()
        ->sortByDesc('nbr_ventes_article')
        ->take(3);
        
        $articles = Article::get();

        $categories = Categorie::get();

        
        if(isset($_POST['supprimer']))
        {
            $id_article=$_POST['id_article'];
            Contient::where(['id_article'=>$id_article])->delete();
            Article::where(['id_article'=>$id_article])->delete();
        }
        
        if(isset($_POST['add_category']))
        {
            $categorie=$_POST['newcategory'];
            Categorie::create(['nom_categorie'=>$categorie]);
        }

        if(isset($_POST['add_basket']))
        {
            $id_article=$_POST['id_article'];
            $quantite=$_POST['number'];
            $id_user = Session::get('id');
            $commandes = DB::connection('mysql')->table('users')
            ->join('achete','achete.id_users','users.id_users')
            ->join('commande','commande.id_commande','achete.id_commande')
            ->where('users.id_users',$id_user)
            ->where('commande.achevement_commande',0)
            ->get();

            foreach($commandes as $commande)
            {
                $existants=Achete::where('id_users', '=', $id_user)
                ->where('id_commande', '=', $commande->id_commande)
                ->get();
                $count=0;
                
                foreach($existants as $existant)
                {
                    $count++;
                }
            
                // if($count==0)
                // {
                    $contient=new Contient;
                    $contient->id_article=$id_article;
                    $contient->id_commande=$commande->id_commande;
                    $contient->quantite=$quantite;
                    $contient->save();
                // }
            }
        }

        return view('boutique', [
            'topventes' => $topvente,
            'articles' => $articles,
            'categories'=>$categories,
        ]);
    
    }
}