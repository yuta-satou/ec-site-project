@extends('layouts.app')
@section('title', '商品一覧')

@section('js')
<script src="{{ asset('js/view.js') }}" defer></script>
@endsection


@section('content')
<div class="container">
    <h1>商品詳細画面</h1>
    <a href="{{ route('item') }}">TOPへ戻る</a>
</div>
@endsection
