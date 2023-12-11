<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
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
        <h1 class="content_title">情報変更</h1>
        <div class="update">
            <p class="message">{{session('message')}}</p>
            <div class="shop_name">
                <p class="item">店舗名</p>
                <p class="name">
                    {{$shop['name']}}</p>
            </div>
            <form class="form" action="{{route('postUpdate',$shop->id)}}" method="post">
                @csrf
            <div class="shop_img">
                <p class="item">画像</p>
                <textarea class="img" name="img" cols="30">{{$shop['img']}}
                </textarea>
            </div>
            <div class="shop_detail">
                <p class="item">店舗紹介</p>
                <textarea class="detail" name="detail" cols="30">{{$shop['detail']}}</textarea>
            </div>
            <button class="submit" type="submit">変更</button>
            </form>
        </div>
    </main>
</body>
</html>