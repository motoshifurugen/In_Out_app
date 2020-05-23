<table border="1">
    @foreach($events as $event)

    <tr>
      <td>{{ $event->type }}</td>
      <td>{{ $event->item_name }}</td>
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
