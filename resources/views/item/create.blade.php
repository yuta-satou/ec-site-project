@extends('layouts.admin.app')
@section('title', '商品一覧')

@section('js')
<script src="{{ asset('js/view.js') }}" defer></script>
@endsection

@section('content')
<div class="container">
    <h1>商品新規登録画面</h1>
    <a href="{{ route('item') }}">TOPへ戻る</a>

    <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit(create_msg)" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">
                商品名
            </label>
            <input
                id="name"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
                type="text">
            @if ($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="explanation">
                説明
            </label>
            <input
                id="explanation"
                name="explanation"
                class="form-control"
                value="{{ old('explanation') }}"
                type="text">
            @if ($errors->has('explanation'))
                <div class="text-danger">
                    {{ $errors->first('explanation') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="money">
                価格
            </label>
            <input
                id="money"
                name="money"
                class="form-control"
                value="{{ old('money') }}"
                type="text">
            @if ($errors->has('money'))
                <div class="text-danger">
                    {{ $errors->first('money') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="stock">
                在庫数
            </label>
            <input
                id="stock"
                name="stock"
                class="form-control"
                value="{{ old('stock') }}"
                type="text">
            @if ($errors->has('stock'))
                <div class="text-danger">
                    {{ $errors->first('stock') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="image">
                商品画像
            </label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="mt-5">
            <a class="btn btn-secondary" href="{{ route('item') }}">
                キャンセル
            </a>
            <button type="submit" class="btn btn-primary">
                登録する
            </button>
        </div>
    </form>
</div>
<script src="js/top.js "></script>
@endsection
