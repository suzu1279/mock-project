<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>模擬案件＿新フリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
        <h1 class="header-ttl">
            <a href="/">COACHTECH</a>
        </h1>
        <form action="/search" method="get">
            <input class="search-box" type="text" name="input" placeholder="なにをお探しですか？" value="{{request('name')}}"/>
            <button type="submit" class="submit-button">検索</button>
        </form>
            <nav class="header-nav">
                <ul class="header-nav-list">
                    <li class="header-nav-item">
                        <a href="/login">ログアウト</a>
                    </li>
                    <li class="header-nav-item">
                        <a href="/mypage">マイページ</a>
                    </li>
                    <li class="header-nav-item">
                        <a href="/sell">
                            <button class="button">出品</button>
                        </a>
                    </li>
                </ul>
            </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>