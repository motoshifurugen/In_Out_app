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
        $event->type = request('type');
        $event->item_name = request('item_name');
        $event->price = request('price');
        $event->memo = request('memo');
        $event->save();
        return redirect()->route('events.index');
    }

    public function show(Event $event) {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event) {
        return view('events.edit', compact('event'));
    }


    public function update(Request $request, Event $event) {
        $event->type = request('type');
        $event->item_name = request('item_name');
        $event->price = request('price');
        $event->memo = request('memo');
        $event->save();
        return redirect()->route('events.index');
    }

    public function destroy(Event $event) {
        $event->delete();
        return redirect()->route('events.index');
    }
}
