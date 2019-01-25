<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use Carbon\Carbon;
class EventController extends Controller
{

    public function eventcoming()
    {
        $events = Event::where('date_events', '>=', Carbon::today()->toDateString())->get();
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
