<form method="POST" action="/events">
    {{ csrf_field() }}
    <!-- <input type="number" name="event_date"> -->
    {{-- <input type="text" name="type">
    <input type="text" name="item_name">
    <input type="number" name="price">
    <input type="text" name="memo"> --}}

<table border="1">
    <tr>
        <th>In or Out</th>
        <th>項目名</th>
        <th>金額</th>
        <th>メモ</th>
    </tr>
    <tr>
        <td><input type="text" name="type"></td>
        <td>
            <select name="item_id">
                @foreach($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </td>
        <td><input type="number" name="price"></td>
        <td><input type="text" name="memo"></td>
    </tr>
</table>

    <button type="submit" >保存する</button>
  </form>

  <a href="/events">ホームに戻る</a>
