<form method="POST" action="/events/{{ $event->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    {{-- <input type="text" name="type" value="{{ old('type') == '' ? $event->type : old('type') }}">
    <input type="text" name="item_name" value="{{ old('item_name') == '' ? $event->item_name : old('item_name') }}">
    <input type="number" name="price" value="{{ old('price') == '' ? $event->price : old('price') }}">
    <input type="text" name="memo" value="{{ old('memo') == '' ? $event->memo : old('memo') }}"> --}}

    <table border="1">
        <tr>
            <th>In or Out</th>
            <th>項目名</th>
            <th>金額</th>
            <th>メモ</th>
        </tr>
        <tr>
            <td><input type="text" name="type" value="{{ old('type') == '' ? $event->type : old('type') }}"></td>
            <td> <input type="text" name="item_name" value="{{ old('item_name') == '' ? $event->item_name : old('item_name') }}"></td>
            <td><input type="number" name="price" value="{{ old('price') == '' ? $event->price : old('price') }}"></td>
            <td><input type="text" name="memo" value="{{ old('memo') == '' ? $event->memo : old('memo') }}"></td>
        </tr>
    </table>

    <button type="submit">更新する</button>
  </form>

  <a href="/events">ホームに戻る</a>
