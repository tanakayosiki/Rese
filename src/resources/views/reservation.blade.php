<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reservation.css') }}">
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
        <header class="content_title">予約確認</header>
        <div class="reservation_list">
            <?php $i=1; foreach($reservations as $reservation):?>
            <div class="reservation">
                <p class="number">予約<?=$i?></p>
                <div class="shop_date">
                    <p class="item">予約日</p>
                    <p class="date">{{$reservation['date']}}
                </div>
                <div class="shop_time">
                    <p class="item">時間</p>
                    <p class="time">{{$reservation->time->getTime()}}
                    </p>
                </div>
                <div class="shop_people">
                    <p class="item">人数</p>
                    <p class="people">{{$reservation->person->getPerson()}}</p>
                </div>
            </div>
            <?php
            $i++;
            endforeach;
            ?>
        </div>
    </main>
</body>
</html>