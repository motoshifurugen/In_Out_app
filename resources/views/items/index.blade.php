@extends('layouts.layouts2')

@section('title', 'Item')

@section('content')

<table class="table">
    <tr>
        <th>項目名</th>
    </tr>
    @foreach($items as $item)

    <tr>
      <td>{{ $item->name }}</td>
      <td><a href="/items/{{ $item->id }}" class="btn btn-outline-primary">見る</a></td>
      <td><a href="/items/{{ $item->id }}/edit" class="btn btn-outline-primary">編集する</a></td>
      <td>
        <form action="/items/{{ $item->id }}" method="POST">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {{-- <button type="submit" class="btn btn-outline-danger">削除する</button> --}}
        </form>
      </td>
    </tr>

    @endforeach
    </table>
    <a href="/items/create">新しく追加する</a>

    @endsection
