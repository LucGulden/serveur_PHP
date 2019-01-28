<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\Participe;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class EventController extends Controller
{

    public function eventcoming()
    {
        $events = Event::where('date_events', '>=', Carbon::today()->toDateString())->get();
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
        return view('evenementscoming', ['events' => $events]);
    }

    public function eventpassed()
    {
        $events = Event::where('date_events', '<', Carbon::today()->toDateString())->get();
        return view('evenementspasses', [
        'events' => $events
    ]);
    }
}
