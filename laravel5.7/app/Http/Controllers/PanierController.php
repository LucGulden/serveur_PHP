<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\CommandeRecue;
use App\Commande;
use App\Achete;
use App\Contient;

class PanierController extends Controller
{
    public function MonPanier()
    {
        $BDEs = DB::connection('mysql2')->table('users')
        ->where('id_role', 4)
        ->get();

        $id_user = Session::get('id');
        $articles = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->join('contient','contient.id_commande','commande.id_commande')
        ->join('articles','articles.id_article','contient.id_article')
        ->where('users.id_users',$id_user)
        ->where('commande.achevement_commande',0)
        ->get();

        $commandes = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->where('users.id_users',$id_user)
        ->where('commande.achevement_commande',0)
        ->get();

        $users = DB::connection('mysql2')->table('users')
        ->where('id_users', $id_user)
        ->get();

        
        if(isset($_POST['commander']))
        {
            foreach ($BDEs as $BDE){
            Mail::to($BDE->mail_user)->send(new CommandeRecue);
            }

            foreach($articles as $article){
                Article::where('id_article','=',$article->id_article)
                ->increment('nbr_ventes_article', $article->quantite);
            }

            foreach($commandes as $commande){
            Commande::where('id_commande', '=', $commande->id_commande)
            ->increment('achevement_commande');
            Commande::create(['achevement_commande' => 0]);
            
            $newCommandeID=0;

            $paniers=DB::table('commande')
            ->OrderBy('id_commande','asc')
            ->get();

            foreach($paniers as $panier){
            $newCommandeID=$panier->id_commande;
            }

            Achete::create(['id_commande'=>$newCommandeID, 'id_users'=>$id_user]);
            }

            return redirect('boutique');
        }

        if(isset($_POST['supprimer']))
        {
            $id_article=$_POST['id_article'];
            $id_user = Session::get('id');
            $commandes = DB::connection('mysql')->table('users')
            ->join('achete','achete.id_users','users.id_users')
            ->join('commande','commande.id_commande','achete.id_commande')
            ->where('users.id_users',$id_user)
            ->where('commande.achevement_commande',0)
            ->get();
            

            foreach($commandes as $commande)
            {
                Contient::where('id_article','=',$id_article)
                ->where('id_commande','=',$commande->id_commande)
                ->delete();
            }

            return redirect('panier');
        }

        return view('panier', [
            'articles' => $articles,
        ]);
    }

}