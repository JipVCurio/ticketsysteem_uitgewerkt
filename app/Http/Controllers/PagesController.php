<?php

namespace App\Http\Controllers;

use App\Models\Event;

class PagesController extends Controller
{
    public function events() {
        $events = Event::all();

        return view('events.index', ['events' => $events]);
    }

    /**
     * Display the specified resource.
     */
    public function showEvent(string $id)
    {
        $event = Event::findOrFail($id);

        return view('events.show')->with('event', $event);
    }
}
