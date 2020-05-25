@extends('layouts.layouts')

@section('title', 'In Out app')

@section('content')
{{-- <div>{{ $event->event_date }}</div> -}}
{{-- <div>{{ $event->type }}</div>
<div>{{ $event->item_name }}</div>
<div>{{ $event->price }}</div>
<div>{{ $event->memo }}</div> --}}

<table class="table">
    <tr>
        <th>In or Out</th>
        <th>項目名</th>
        <th>金額</th>
        <th>メモ</th>
    </tr>
    <tr>
        <td>{{ $event->type }}</td>
        <td><select disabled name="item_id">
            @foreach ($items as $item)
                @if ($item->id == $event->item_id)
                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endif
            @endforeach</td>
        <td>{{ $event->price }}</td>
        <td>{{ $event->memo }}</td>
    </tr>
</table>

<a href="/events">ホームに戻る</a>

@endsection
