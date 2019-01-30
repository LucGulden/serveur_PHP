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
        // Récupère l'id de l'utilisateur connecté
        $id_user = Session::get('id');
        // Récupère les articles du panier de l'utilisateur connecté
        $articles = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->join('contient','contient.id_commande','commande.id_commande')
        ->join('articles','articles.id_article','contient.id_article')
        ->where('users.id_users',$id_user)
        ->where('commande.achevement_commande',0)
        ->get();

        return view('panier', [
            'articles' => $articles,
        ]);
    }

    public function commander(){
        // Récupère l'id de l'utilisateur connecté
        $id_user = Session::get('id');

        // Récupère le centre de l'utilisateur connecté
        $user_centres = DB::connection('mysql2')->table('centre')
        ->join('users', 'users.id_centre', 'centre.id_centre')
        ->where('users.id_users', $id_user)
        ->get();

        // Récupère la liste des membres du BDE du centre de l'utilisateur connecté
        foreach($user_centres as $user_centre){
        $BDEs = DB::connection('mysql2')->table('users')
        ->where('id_role', 4)
        ->where('id_centre', $user_centre->id_centre)
        ->get();
        }

        // Récupère les articles du panier de l'utilisateur connecté
        $articles = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->join('contient','contient.id_commande','commande.id_commande')
        ->join('articles','articles.id_article','contient.id_article')
        ->where('users.id_users',$id_user)
        ->where('commande.achevement_commande',0)
        ->get();

        // Récupère les infos sur la commande de l'utilisateur
        $commandes = DB::connection('mysql')->table('users')
        ->join('achete','achete.id_users','users.id_users')
        ->join('commande','commande.id_commande','achete.id_commande')
        ->where('users.id_users',$id_user)
        ->where('commande.achevement_commande',0)
        ->get();

        $count=0;
       
        //lorsque l'on clique sur commander
        if(isset($_POST['commander']))
        {
            //Augmente le nombre de vente des articles du panier
            foreach($articles as $article){
                Article::where('id_article','=',$article->id_article)
                ->increment('nbr_ventes_article', $article->quantite);
                $count++;
            }

            if($count!=0){

            //Envoi un mail au membres du BDE du centre concerné    
            foreach ($BDEs as $BDE){
            Mail::to($BDE->mail_user)->send(new CommandeRecue);
            }

            //Créé un nouveau panier pour l'utilisateur et ferme l'ancien panier
            foreach($commandes as $commande){
            Commande::where('id_commande', '=', $commande->id_commande)
            ->increment('achevement_commande');
            Commande::create(['achevement_commande' => 0]);
            
            $newCommandeID=0;
            
            //Récupère la liste des paniers
            $paniers=DB::table('commande')
            ->OrderBy('id_commande','asc')
            ->get();

            //Récupère l'ID du panier créé
            foreach($paniers as $panier){
            $newCommandeID=$panier->id_commande;
            }
            //Associe le panier créé à l'utilisateur connecté
            Achete::create(['id_commande'=>$newCommandeID, 'id_users'=>$id_user]);
            }
            }
        }
        return redirect('boutique');
    }

    public function deletebasket(){
        //Lorsque l'on clique sur supprimer
        if(isset($_POST['supprimer']))
        {
            //Récupère l'id de l'article concerné
            $id_article=$_POST['id_article'];
            //Récupère l'id de l'utilisateur connecté
            $id_user = Session::get('id');
            //Récupère le panier de l'utilisateur connecté
            $commandes = DB::connection('mysql')->table('users')
            ->join('achete','achete.id_users','users.id_users')
            ->join('commande','commande.id_commande','achete.id_commande')
            ->where('users.id_users',$id_user)
            ->where('commande.achevement_commande',0)
            ->get();
            

            foreach($commandes as $commande)
            {
                //Supprime l'article
                Contient::where('id_article','=',$id_article)
                ->where('id_commande','=',$commande->id_commande)
                ->delete();
            }
        }
        return redirect('panier');
    }
}