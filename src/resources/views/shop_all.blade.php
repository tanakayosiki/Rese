<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <title>Rese</title>
</head>
<body>
    <main class="main">
        <header class="header">
            <div class="icon_title">
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
            </div>
            <div class="header_search" >
                <form class="search_form" action="/search" method="get">
                    <div class="search_container">
                        <div class="all_prefecture">
                            <select class="prefecture_search" name="prefecture_id" onchange="this.form.submit()" value="{{old('prefecture')}}">
                            <option value="">All area</option>
                            @foreach($prefectures as $prefecture)
                                <option value="{{$prefecture['id']}}">{{$prefecture['name']}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="all_genre">
                            <select class="genre_search" name="genre_id" onchange="this.form.submit()" value="{{old('genre')}}">
                            <option value="">All genre</option>
                            @foreach($genres as $genre)
                                <option value="{{$genre['id']}}">{{$genre['name']}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="word_search">
                            <input class="text" type="text" name="keyword" onchange="this.form.submit()">
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <div class="shop_all">
            <form class="detail_form">
                @foreach($shops as $shop)
                <div class="shop">
                    <div class="shop_img">
                        <img src="{{$shop['img']}}">
                    </div>
                    <div class="shop_content">
                        <h1 class="shop_name">{{$shop['name']}}</h1>
                    <div class="shop_tag">
                        <p class="prefecture_tag">#{{$shop['prefecture']['name']}}</p>
                        <p class="genre_tag">#{{$shop['genre']['name']}}</p>
                    </div>
                    <div class="button">
                    <div class="detail_button">
                        <a class="detail_link" href="{{route('detail',$shop)}}">詳しくみる</a>
                    </div>
                    @if($shop->is_liked_by_auth_user())
                        <a class="heart" href="{{route('unnice',$shop->id)}}"></a>
                    @else
                        <a class="off_heart" href="{{route('nice',$shop)}}"></a>
                    @endif
                    </div>
                    <div class="evaluation">
                        <div class="score">
                            <a class="star" href="">☆</a>
                            <span class="total"></span>
                        </div>
                        <div class="comment">
                            <a class="icon" href=""></a>
                            <span class="total"></span>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </form>
        </div>
    </main>
</body>
</html>

