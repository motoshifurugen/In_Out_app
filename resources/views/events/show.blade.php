<!-- <div>{{ $event->event_date }}</div> -->
{{-- <div>{{ $event->type }}</div>
<div>{{ $event->item_name }}</div>
<div>{{ $event->price }}</div>
<div>{{ $event->memo }}</div> --}}

<table border="1">
    <tr>
        <th>In or Out</th>
        <th>項目名</th>
        <th>金額</th>
        <th>メモ</th>
    </tr>
    <tr>
        <td>{{ $event->type }}</td>
        <td>{{ $event->item_name }}</td>
        <td>{{ $event->price }}</td>
        <td>{{ $event->memo }}</td>
    </tr>
</table>

<a href="/events">ホームに戻る</a>
