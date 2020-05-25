@extends('layouts.layouts2')

@section('title', 'Item')

@section('content')

<form method="POST" action="/items">
    {{ csrf_field() }}
    <!-- <input type="number" name="item_date"> -->
    {{-- <input type="text" name="type">
    <input type="text" name="item_name">
    <input type="number" name="price">
    <input type="text" name="memo"> --}}

<table class="table">
    <tr>
        <th>項目名</th>
    </tr>
    <tr>
        <td><input type="text" name="name"></td>
    </tr>
</table>

    <button type="submit" class="btn btn-outline-primary" >保存する</button>
  </form>

  <a href="/items">項目一覧に戻る</a>

  @endsection
