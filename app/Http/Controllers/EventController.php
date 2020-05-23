<?php

namespace App\Http\Controllers;

use App\Event;
use App\Item;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create() {
        $items = Item::all();

        return view('events.create', compact('items'));
    }

    public function store(Request $request) {
        $event = new Event();
        // $event->event_date = request('event_date');
        $event->type = request('type');
        // $event->item_name = request('item_name');
        $event->item_id = request('item_id');
        $event->price = request('price');
        $event->memo = request('memo');
        $event->save();
        return redirect()->route('events.index');
    }

    public function show(Event $event) {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event) {
        $items = Item::all();

        return view('events.edit', compact('event', 'items'));
    }


    public function update(Request $request, Event $event) {
        $event->type = request('type');
        // $event->item_name = request('item_name');
        $event->item_id = request('item_id');
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
