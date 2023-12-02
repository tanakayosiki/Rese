<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/evaluation.css') }}">
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
    <main class="main">
    <div class="evaluation">
            <form class="form" action="/evaluation" method="post">
                @csrf
            <div class="star">
            <label class="label">星の数</label>
                <select class="select" name="star">
                    <option value=""></option>
                    <option value="1">☆</option>
                    <option value="2">☆☆</option>
                    <option value="3">☆☆☆</option>
                    <option value="4">☆☆☆☆</option>
                    <option value="5">☆☆☆☆☆</option>
                </select>
            </div>
            <div class="comment">
                <label class="label">コメント</label>
                <textarea class="text" name="comment" cols="30"></textarea>
            </div>
            <div class="button">
                <button class="submit" type="submit">送信</button>
            </div>
            <input type="hidden" id="shop_id" name="shop_id" value="{{$shop->id}}">
            </form>
        </div>
    </main>
</body>
</html>