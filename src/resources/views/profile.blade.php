@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-form__content">
    <form class="form" action="/profile" method="post">
        @csrf
        <div class="form__group">
            <div class="circle">
                <div class="user-name">
                    ユーザー名
                </div>
                <div class="profile-edit">
                    <a class="profile__edit--link" href="/mypage/profile">プロフィールを編集</a>
                </div>
            </div>
        </div>
        <div class="item__table">
            <table class="item-table__inner">
                <tr class="item-table__row">
                    <th class="item-table__header">
                        <a class="item-table__header-span" href="/mypage?page=buy">出品した商品</a>
                        <a class=" item-table__header-span" href="/mypage?page=sell">購入した商品</a>
                    </th>
                </tr>
                <tr>
                    <td class="img-data">
                        @foreach ($items as $item)
                        <div class="image">
                            @if ($item->image !=='')
                            <a href="{{ url('item/{item_id}') }}">
                                <img src="{{ \Storage::url($item->image) }}" alt="画像" width="50%">
                            </a>
                            @else
                            <img src="{{ \Storage::url('item/no_image.png') }}" alt="">
                            @endif
                            <p class="image-name">{{ $item -> name }}</p>
                        </div>

                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>
@endsection