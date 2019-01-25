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
        if(isset($_POST['participe_event'])){
            $participes = Participe::all();
            $id_utilisateur = Session::get('id');
            foreach($participes as $participe)
            {
                echo($participe->id_events);
                // print_r($participe);
                ?><br/><?php
            }
        }
        return view('evenementscoming', [
        'events' => $events
    ]);
    }

    public function eventpassed()
    {
        $events = Event::where('date_events', '<', Carbon::today()->toDateString())->get();
        return view('evenementspasses', [
        'events' => $events
    ]);
    }
}
