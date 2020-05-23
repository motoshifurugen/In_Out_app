<form method="POST" action="/events/{{ $event->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="type" value="{{ old('type') == '' ? $event->type : old('type') }}">
    <input type="text" name="item_name" value="{{ old('item_name') == '' ? $event->item_name : old('item_name') }}">
    <input type="number" name="price" value="{{ old('price') == '' ? $event->price : old('price') }}">
    <input type="text" name="memo" value="{{ old('memo') == '' ? $event->memo : old('memo') }}">

    <button type="submit">更新する</button>
  </form>

  <a href="/events">ホームに戻る</a>
