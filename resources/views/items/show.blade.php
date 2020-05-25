@extends('layouts.layouts2')

@section('title', 'Item')

@section('content')

<table class="table">
    <tr>
        <th>項目名</th>
    </tr>
    <tr>
        <td>{{ $item->name }}</td>
    </tr>
</table>

<a href="/items">項目一覧に戻る</a>

@endsection
