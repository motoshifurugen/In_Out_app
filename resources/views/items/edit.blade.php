<form method="POST" action="/items/{{ $item->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    {{-- <input type="text" name="type" value="{{ old('type') == '' ? $item->type : old('type') }}">
    <input type="text" name="item_name" value="{{ old('item_name') == '' ? $item->item_name : old('item_name') }}">
    <input type="number" name="price" value="{{ old('price') == '' ? $item->price : old('price') }}">
    <input type="text" name="memo" value="{{ old('memo') == '' ? $item->memo : old('memo') }}"> --}}

    <table border="1">
        <tr>
            <th>項目名</th>
        </tr>
        <tr>
            <td><input type="text" name="name" value="{{ old('name') == '' ? $item->name : old('name') }}"></td>
        </tr>
    </table>

    <button type="submit">更新する</button>
  </form>

  <a href="/items">ホームに戻る</a>
