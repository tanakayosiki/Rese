<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/new_shop.css') }}">
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
    <main class="new_shop">
        <h1 class="content_header">店舗登録</h1>
        <div class="sign_up">
            <form class="form" action="{{route('postNewShop',$user->id)}}" method="post">
                @csrf
            <div class="shop_name">
                <p class="item">店舗名</p>
                <input class="name" type="text" name="name" placeholder="Username" value="{{old('name')}}">
            </div>
            <div class="prefecture">
                <p class="item">都道府県</p>
                <select class="tag" name="prefecture_id">
                    <option value="">All area</option>
                    @foreach($prefectures as $prefecture)
                    <option value="{{$prefecture['id']}}">{{$prefecture['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="genre">
                <p class="item">ジャンル</p>
                <select class="tag" name="genre_id">
                <option value="">All genre</option>
                @foreach($genres as $genre)
                <option value="{{$genre['id']}}">{{$genre['name']}}</option>
                @endforeach
                </select>
            </div>
            <div class="shop_img">
                <p class="item">画像</p>
                <textarea class="img" name="img" cols="30" placeholder="img_url" value="{{old('img')}}"></textarea>
            </div>
            <div class="detail">
                <p class="item">店舗紹介</p>
                <textarea class="textarea" name="detail" cols="30" value="{{old('detail')}}"></textarea>
            </div>
            <button class="submit" type="submit">登録する</button>
            </form>
    </main>
</body>
</html>