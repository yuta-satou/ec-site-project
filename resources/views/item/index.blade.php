@extends('layouts.app')
@section('title', '商品一覧')

@section('js')
<script src="{{ asset('js/view.js') }}" defer></script>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-push-1 border border-dark">4</div>
        <div class="col-md-3 col-md-push-1 border border-dark">4</div>
        <div class="col-md-3 col-md-push-1 border border-dark">4</div>
        {{-- <div class="col-md-6 border border-dark">6</div> --}}
    </div>
    <h1>TOP画面</h1>
    <a href="{{ route('create') }}">商品新規登録画面</a>

</div>
@endsection
