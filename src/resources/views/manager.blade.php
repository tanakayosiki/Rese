<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manager.css') }}">
    <title>Rese</title>
</head>
<body>
    <header class="header">
    <div class="header_icon">
        <form action="/menu" method="get">
        <button class="menu_button" type="submit">
            <p class="menu_button-bar"></p>
            <p class="menu_button-bar"></p>
            <p class="menu_button-bar"></p>
        </button>
        </form>
    </div>
    <div class="header_title">
        <h1 class="title">Rese</h1>
    </div>
    </header>
    <main class="manager">
        <h1 class="manager_title">代表者ページ</h1>
        <div class="new_shop">
            <a class="link" href="{{route('newShop',$user->id)}}">新規店舗登録</a>
        </div>
        <div class="update">
            <a class="link" href="{{route('update',$user->id)}}">店舗情報更新</a>
        </div>
        <div class="reservation">
            <a class="link" href="{{route('reservation_confirm',$shop->id)}}">予約情報確認</a>
        </div>
    </main>
</body>
</html>