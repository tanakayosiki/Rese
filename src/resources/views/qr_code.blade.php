<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/qr_code.css') }}">
    <title>Rese</title>
</head>
<body>
    <main class="main">
        <div class="number">
            <span class="item">確認番号</span>
            <span class="content">{{$reservation['id']}}</span>
        </div>
        <div class="name">
            <span class="item">お名前</span>
            <span class="content">{{$reservation['user']['name']}}
        </div>
    </main>
</body>
</html>