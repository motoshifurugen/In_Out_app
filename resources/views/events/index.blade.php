<table border="1">
    <tr>
        <th>In or Out</th>
        <th>項目名</th>
        <th>金額</th>
    </tr>
    @foreach($events as $event)

    <tr>
      {{-- <td>{{ $event->event_date }}</td> --}}
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
      <td><a href="/events/{{ $event->id }}">見る</a></td>
      <td><a href="/events/{{ $event->id }}/edit">編集する</a></td>
      <td>
        <form action="/events/{{ $event->id }}" method="POST">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit">削除する</button>
        </form>
      </td>
    </tr>

    @endforeach
    </table>
    <a href="/events/create">新しく追加する</a>
