<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\Participe;
use App\Utilisateur;
use App\Represente;
use App\Photos_event;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class EventController extends Controller
{

    public function eventcoming()
    {
        // requête récupérant les événements futurs
        $evenements = Event::where('date_events', '>', Carbon::today()->toDateString())->get();
        foreach($evenements as $evenement)
        {
            $id_event = $evenement->id_events;
            $nom_event = $evenement->nom_events;

            // crée un fichier csv nommé selon le nom de l'événement
            $fichier_csv = fopen($nom_event.".csv", 'w+');
            $count=0;

            // requête récupérant la liste des id_users en fonction de l'id_event
            $participations = Participe::where('id_events', '=', $id_event)->get();
            foreach($participations as $participation)
            {
                $id_user = $participation->id_users;
                $liste_participations = Utilisateur::where('id_users', '=', $id_user)->get();
                foreach($liste_participations as $liste_participation)
                {
                    // création de tableaux contenant nom, prénom et mail pour chaque participant à l'événement
                    $tab_nom_users[$count] = $liste_participation->nom_users;
                    $tab_prenom_users[$count] = $liste_participation->prenom_users;
                    $tab_mail_users[$count] = $liste_participation->mail_user;
                    $count++;
                }
            }
            
            for($i=0; $i<$count; $i++)
            {
                // pour chaque participant, on rajoute le nom, prénom et mail dans le csv,
                // grâce aux tableaux créés précédemment
                fwrite($fichier_csv, $tab_nom_users[$i].";");
                fwrite($fichier_csv, $tab_prenom_users[$i].";");
                fwrite($fichier_csv, $tab_mail_users[$i]."\n");
            }
            fclose($fichier_csv);   
        }


        $participations = Participe::where('id_users', '=', Session::get('id'))->get();

        // Lorsque l'utilisateur clique sur participer, on vérifie si il ne participe pas déjà
        // à l'événement associé
        // S'il ne participe pas déjà, on ajoute un enregistrement dans la table participe avec
        // l'id_user et l'id_event associé puis on va incrémenter le nombre de participants 
        if(isset($_POST['participe_event']))
        {
            $id_post=$_POST['id_event_post'];
            $id_utilisateur = Session::get('id');
            $participes = Participe::where('id_users', '=', $id_utilisateur)
            ->where('id_events', '=', $id_post)
            ->get();
            $count=0;
            foreach($participes as $participe)
            {
                $count++;
            }
            if($count==0)
            {
                Event::where('id_events', '=', $id_post)
                ->increment('nbrparticipants_events');
                Participe::create(['id_users' => $id_utilisateur, 'id_events' => $id_post]);
            }
        }

        // Récupère la liste des événements à venir
        $events = Event::where('date_events', '>=', Carbon::today()->toDateString())->get();

        return view('evenementscoming', compact('events'));
    }

    public function eventpassed()
    {
        // requête récupérant la liste des événements passés
        $events = Event::where('date_events', '<', Carbon::today()->toDateString())->get();
      
        if(isset($_POST['idevent']))
        {
            $id_event=$_POST['idevent'];
            // requête avec 2 jointures pour récupérer les images selon l'id de l'événement 
            $photos_events = DB::connection('mysql')->table('events')
            ->join('represente','represente.id_events','events.id_events')
            ->join('photos_event','photos_event.id_photos','represente.id_photos')
            ->where('events.id_events', '=' , $id_event)
            ->get();
        }
        return view('evenementspasses', compact('events', 'photos_events'));
    }




    public function upload()
    {
        $events = Event::where('date_events', '<', Carbon::today()->toDateString())->get();
        return redirect('evenementspasses');
    }
}
