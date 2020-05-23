<form method="POST" action="/items">
    {{ csrf_field() }}
    <!-- <input type="number" name="item_date"> -->
    {{-- <input type="text" name="type">
    <input type="text" name="item_name">
    <input type="number" name="price">
    <input type="text" name="memo"> --}}

<table border="1">
    <tr>
        <th>項目名</th>
    </tr>
    <tr>
        <td><input type="text" name="name"></td>
    </tr>
</table>

    <button type="submit" >保存する</button>
  </form>

  <a href="/items">ホームに戻る</a>
