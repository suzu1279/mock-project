@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__message">
        <span class="confirm__message--first">
            登録していただいたメールアドレスに認証メールを送付しました。<br>
        </span>
        <span class="confirm__message--second">
            メール認証を完了してください。
        </span>
    </div>
    <form class="form" action="/mypage/profile">
        <div class="button">
            <button class="certification-button" href="/mypage/profile">
                認証はこちらから
            </button>
        </div>
        <div class="link">
            <a class="certification-link" href="">
                認証メールを再送する
            </a>
        </div>
    </form>
</div>
@endsection