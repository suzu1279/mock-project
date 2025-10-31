@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection
@section('content')
<div class="index-form__content">
    <form class="form" action="/index" method="post">
        @csrf
        <div class="item__table">
            <table class="item-table__inner">
                <tr class="item-table__row">
                    <th class="item-table__header">
                        <a href class="item-table__header-span">おすすめ</a>
                        <a href class="item-table__header-span">マイリスト</a>
                    </th>
                </tr>
            </table>
            <div class="item-list">
                <div class="item-image">
                    @foreach ($items as $item)
                    <div class="image">
                        @if ($item->image !=='')
                        <img src="{{ \Storage::url($item->image) }}" alt="画像" width="50%">
                        </a>
                        @else
                        <img src="{{ \Storage::url('item/no_image.png') }}" alt="">
                        @endif
                        <p class="image-name">{{ $item -> name }}</p>
                        @if( $item->purchase)
                        <span class="sold-label">Sold</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
</div>
@endsection