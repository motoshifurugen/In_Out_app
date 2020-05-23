<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $event = new Event();
        $event->name = request('name');
        $event->save();
        return redirect()->route('events.index');
    }

    public function show(Event $Event) {
        return view('events.show', compact('event'));
    }

    public function edit(Event $Event) {
        return view('events.edit', compact('event'));
    }


    public function update(Request $request, Event $Event) {
        $event->name = request('name');
        $event->save();
        return redirect()->route('events.index');
    }

    public function destroy(Event $Event) {
        $event->delete();
        return redirect()->route('events.index');
    }
}
