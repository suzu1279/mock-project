@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
                    @if (@isset())
                    {{ $param->name }}
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
@endsection