<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mail\CommandeRecue;

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

        $users = DB::connection('mysql2')->table('users')
        ->where('id_users', $id_user)
        ->get();

        foreach ($BDEs as $BDE){
        Mail::to($BDE->mail_user)->send(new CommandeRecue);
        }
        return view('panier', [
            'articles' => $articles,
        ]);
    }

}