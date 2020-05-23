<form method="POST" action="/events">
    {{ csrf_field() }}
    <!-- <input type="number" name="event_date"> -->
    <input type="text" name="type">
    <input type="text" name="item_name">
    <input type="number" name="price">
    <input type="text" name="memo">

    <button type="submit" >保存する</button>
  </form>

  <a href="/events">ホームに戻る</a>
