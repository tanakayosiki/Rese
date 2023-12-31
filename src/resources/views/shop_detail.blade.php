<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <title>Rese</title>
</head>
<body>
    <main class="main">
        <div class="left_screen">
            <header class="header">
                <div class="icon_title">
                    <div class="header_icon">
                        <form action="/menu" method="get">
                        <button class="menu_button">
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
            </header>
            <p class="message">{{session('message')}}</p>
            <div class="shop">
                <div class="shop_name">
                    <a class="back_page" href="/"><</a>
                    <p class="name">{{$shop['name']}}</p>
                </div>
                <div class="shop_img">
                    <img src="{{$shop['img']}}">
                </div>
                <form class="img_post" action="{{route('imgStore',$shop->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$shop->id}}">
                <button class="img_button" type="submit">画像を保存する</button>
                </form>
                <div class="shop_tag">
                    <p class="prefecture_tag">#{{$shop['prefecture']['name']}}</p>
                    <p class="genre_tag">#{{$shop['genre']['name']}}</p>
                </div>
                <div class="shop_detail">
                    <p class="detail">{{$shop['detail']}}</p>
                </div>
            </div>
        </div>
        <div class="right_screen">
            <div class="reservation">
                <div class="reservation_title">
                    <p class="content">予約</p>
                </div>
                <form class="form" action="{{route('reservation',$shop->id)}}" method="post">
                    @csrf
                <div class="reservation_content">
                    <div class="reservation_date">
                        <input class="date" type="date" name="date" min="{{$today}}">
                        @error('date')
                        <p class="error">{{$errors->first('date')}}
                @enderror
                    </div>
                <div class="reservation_select">
                    <select class="select" name="time_id">
                        <option Value=""></option>
                        @foreach($times as $time)
                        <option value="{{$time['id']}}">{{$time->getTime()}}</option>
                        @endforeach
                    </select>
                    @error('time_id')
                <p class="error">{{$errors->first('time_id')}}
                @enderror
                </div>
                <div class="reservation_select">
                    <select class="select" name="person_id">
                        <option Value=""></option>
                        @foreach($people as $person)
                        <option value="{{$person['id']}}">{{$person->getPerson()}}</option>
                        @endforeach
                    </select>
                    @error('person_id')
                    <p class="error">{{$errors->first('person_id')}}
                    @enderror
                </div>
                </div>
                <div class="reservation_confirm">
                    <table class="reservation_table">
                        <tr>
                            <th class="confirm_title">Shop</th>
                            <td class="confirm_content">{{$shop['name']}}</td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Date</th>
                            <td class="confirm_content"></td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Time</th>
                            <td class="confirm_content"></td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Number</th>
                            <td class="confirm_content"></td>
                        </tr>
                    </table>
                </div>
            </div>
                        <button class="button" type="submit">予約する</button>
                        <input type="hidden" id="shop_id" name="shop_id" value="{{$shop->id}}">
                    </form>
        </div>
    </main>
</body>
</html>