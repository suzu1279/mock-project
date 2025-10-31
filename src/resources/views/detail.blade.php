@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail-page">
    <div class="left-content">
        <div class="image-label">
            <div class="image">
                <img src="{{ \Storage::url($item->image) }}" alt="画像" width="50%">
            </div>
        </div>
        @error('image')
        <span class="input_error">
            <p class="input_error_message">
                {{ $errors->first('image')}}
            </p>
        </span>
        @enderror
        <div class="right-content">
            <div class="item--name__label">
                <h2 class="name-label">
                    {{ $item -> name}}
                </h2>
            </div>
            <div class="item--name__label">
                <div class="brand-name">
                    {{ $item ->brand}}
                </div>
            </div>
            <div class="price-label">
                ¥{{ $item -> price }}（税込）
            </div>
            <form action="/item/{item}" method="post" class="like__button--form">
                @csrf
                <button type="submit" class="like-button">☆</button>
                <span class="like-count" >
                    {{ $item->likes()->count() }}
                </span>
                <button type="submit" class="comment-mark">💬</button>
                <span>
                    {{ $item->comments()->count() }}
                </span>
            </form>
            <form action="/purchase/{item_id}" method="get">
                <div class="sell-button_form">
                    <button class="sell-button">
                        購入手続きへ
                    </button>
                </div>
            </form>
            <h3 class="item-description">
                商品説明
            </h3>
            <div class="color-label">
                カラー
            </div>
            <div class="detail-label">
                <span>商品の詳細</span>
                <span class="description">{{ $item -> description }}</span>
            </div>
            <h3 class="item-information">
                商品の情報
            </h3>
            <div class="category-label">
                <p>カテゴリー</p>
                <span class="category">
                </span>
            </div>
            <div class="condition-label">
                <span>商品の状態</span>
                <span class="condition">{{ $item -> condition }}</span>
            </div>
            <form action="/item/{item}" method="post">
                @csrf
                <h3 class="comment-label">
                    コメント
                </h3>
                <div class="comment-user">
                    <p>admin</p>
                </div>
                <div class="comment">
                    商品へのコメント
                </div>
                <div class="comment-area">
                    <textarea class="item_comment-area" name="item_comment-area" cols="30" rows="10">
                    </textarea>
                    <div class="form__error">
                        @error('comment')
                        {{ $errors -> first('comment')}}
                        @enderror
                    </div>
                </div>
                <div class="comment-button_form">
                    <button class="comment-button">
                        コメントを送信する
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection