<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
    <title>Rese</title>
</head>
<body>
    <main Class="main">
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
    <div class="my_page">
        <div class="user">
            <p class="name">{{$user['name']}}さん</p>
        </div>
        <div class="content">
            <div class="reservations">
                <?php $i=1; foreach($reservations as $reservation):?>
                <div class="reservation_confirm">
                    <header class="content_header">
                        <div class="clock_img">
                            <img src="{{asset('img/clock.png')}}">
                        </div>
                        <p class="content_title">予約<?=$i?></p>
                        <a class="cancel" href="{{route('cancel',$reservation->id)}}"></a>
                    </header>
                    <table class="reservation_table">
                    <form class="form" action="{{route('myPageUpdate',$reservation->id)}}" method="post">
                        @csrf
                        <tr>
                            <th class="confirm_title">Shop</th>
                            <td class="confirm_content">{{$reservation['shop']['name']}}</td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Date</th>
                            <td class="confirm_content">{{$reservation['date']}}</td>
                            <td>
                            <input class="select" type="date" name="date">
                            </td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Time</th>
                            <td class="confirm_content">{{$reservation->time->getTime()}}</td>
                            <td>
                            <select class="select" name="time_id">
                            <option value=""></option>
                            @foreach($times as $time)
                            <option value="{{$time['id']}}">{{$time->getTime()}}</option>
                            @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th class="confirm_title">Number</th>
                            <td class="confirm_content">{{$reservation->person->getPerson()}}</td>
                            <td>
                            <select class="select" name="person_id">
                            <option value=""></option>
                            @foreach($people as $person)
                            <option value="{{$person['id']}}">{{$person->getPerson()}}</option>
                            @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                        <td class="change_button">
                        <button class="btn" type="submit">変更</button>
                        </tr>
                        </td>
                    </form>
                    </table>
                </div>
                <?php
            $i++;
            endforeach;
            ?>
            </div>
            <div class="nices">
                <div class="shop_all">
                        @foreach($nices as $nice)
                        <div class="shop">
                            <div class="shop_img">
                                <img src="{{$nice['shop']['img']}}">
                            </div>
                            <div class="shop_content">
                                <h1 class="shop_name">{{$nice['shop']['name']}}</h1>
                            <div class="shop_tag">
                                <p class="prefecture_tag">#{{$nice['shop']['prefecture']['name']}}</p>
                                <p class="genre_tag">#{{$nice['shop']['genre']['name']}}</p>
                            </div>
                            <div class="button">
                            <div class="detail_button">
                                <a class="detail_link" href="{{route('detail',$nice->shop->id)}}">詳しくみる</a>
                            </div>
                                <a class="heart" href="{{route('delete',$nice->id)}}"></a>
                            </div>
                            <div class="review">
                            <span class="star">☆</span>
                            @if($nice->shop->reviews->avg('star'))
                            <span class="total">{{$nice->shop->reviews->avg('star')}}</span>
                            @else
                            <span class="total">0</span>
                            @endif
                                <a class="icon_img" href="{{route('review',$nice->shop->id)}}">
                                <img src="{{asset('img/comment.png')}}">
                                </a>
                            @if($nice->shop->reviews->count())
                            <span class="total">{{$nice->shop->reviews->count()}}件</span>
                            @else
                            <span class="total">0件</span>
                            @endif
                    </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>