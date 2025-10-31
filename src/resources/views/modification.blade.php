@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/modification.css') }}">
@endsection

@section('content')
<div class="modification-form__content">
    <div class="modification-form__heading">
        <h2>住所の変更</h2>
    </div>
    <form class="form" action="/purchase/address" method="post">
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">郵便番号</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="post-code" />
                </div>
                <div class="form__error">
                    <!--バリデーションを実装したら記述します-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" />
                </div>
                <div class="form__error">
                    <!--バリデーションを実装したら記述します-->
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building">
                </div>
                <div class="form__error">
                    <!--バリデーションを実装したら記述します-->
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection