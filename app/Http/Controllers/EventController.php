<?php

namespace App\Http\Controllers;

use App\Event;
use App\Item;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        $items = Item::all();
        return view('events.index', compact('events', 'items'));
    }

    public function create() {
        $items = Item::all();

        return view('events.create', compact('items'));
    }

    public function store(Request $request) {
        var_dump('created_at', request('created_at'));
        var_dump('updated_at', request('updated_at'));

        $event = new Event();
        $event->type = request('type');
        // $event->item_name = request('item_name');
        $event->item_id = request('item_id');
        $event->price = request('price');
        $event->memo = request('memo');
        $event->created_at = request('created_at');
        $event->save();
        // return redirect()->route('events.index');
        // var_dump('type', request('type'), '<br>');
        // var_dump('item_id', request('item_id'), '<br>');
        // var_dump('price', request('price'), '<br>');
        // var_dump('memo', request('memo'), '<br>');
        // $event->type = 'test';
        // $event->item_id = 1;
        // $event->price = 1;
        // $event->memo = 'test';
        // $event->save();
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
