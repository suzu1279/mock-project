@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index-form__content">
    <form class="form" action="/" method="get">
        <div class="item__table">
            <table class="item-table__inner">
                <tr class="item-table__row">
                    <th class="item-table__header">
                        <a class="item-table__header-span" href="/">おすすめ</a>
                        <a class="item-table__header-span" href="/?tab=myList">マイリスト</a>
                    </th>
                </tr>
            </table>
            <div class="item-list">
                <div class="item-image">
                    @foreach ($items as $item)
                    <div class="image">
                        @if ($item->image !=='')
                        <a href="/item/{{$item->id}}">
                            <img src="{{ \Storage::url($item->image) }}" alt="画像" width="50%">
                        </a>
                        @else
                        <img src="{{ \Storage::url('item/no_image.png') }}" alt="">
                        @endif
                        <p class="image-name">{{ $item -> name }}
                        </p>
                        @if ($item->stock <= 0 )
                            <div class="sold-out">SOLD</div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </form>
</div>
@endsection