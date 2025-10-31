@extends('layouts.common')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<form class="form" action="/" method="get">
    <div class="purchase-page">
        <section class="left-panel">
            <div class="card product-card">
                <h2 class="product-name">
                    商品名
                </h2>
                <p class="product-price">¥</p>
                <label for="payment-method" class="label">支払い方法</label>
                <select name="payment-method" id="payment-method" class="select">
                    <option value="">選択してください</option>
                    <option value="conbini">コンビニ払い</option>
                    <option value="card">カード払い</option>
                </select>

                <div class="delivery-info">
                    <a class="delivery__info-change" href="/purchase/address/{item_id}">変更する</a>
                    <h4>配送先</h4>
                    <p class="post-code">
                        郵便番号
                    </p>
                    <p class="address">
                        住所
                    </p>
                </div>
            </div>
        </section>

        <section class="right-panel">
            <div class="summary-box">
                <table class="summary-table">
                    <tr>
                        <th scope="row" class="label">
                            商品代金
                        </th>
                        <td>¥</td>
                    </tr>
                    <tr>
                        <th scope="row" class="label">
                            支払い方法
                        </th>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </div>

            <form action="" method="post" class="purchase-form">
                @csrf
                <button type="submit" class="btn primary">購入する</button>
            </form>
        </section>
    </div>
</form>
@endsection