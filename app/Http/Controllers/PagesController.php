<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PagesController extends Controller
{
    public function events() {
        $events = Event::all();

        return view('events', ['events' => $events]);
    }
}
