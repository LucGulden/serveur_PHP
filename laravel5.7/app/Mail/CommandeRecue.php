<?php

namespace App\Mail;

use Mail;
use App\User;
use App\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class CommandeRecue extends Mailable
{

    use Queueable, SerializesModels;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
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

        return $this->view('emails.commande')
                    ->with([
                        'users'=>$users,
                        'articles'=>$articles,
                    ]);
    }
}
