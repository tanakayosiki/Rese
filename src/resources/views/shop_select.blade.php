<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop_select.css') }}">
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
        <header class="content_title">店舗先選択</header>
        <p class="message">{{session('message')}}</p>
        <div class="manager_list">
            @foreach($roles as $role)
            <div class="manager">
                <form class="form" action="{{route('select',$role->id)}}" method="post">
                    @method('put')
                    @csrf
                <p class="name">{{$role['name']}}
                <div class="button">
                <select name="shop_id">
                    <option value="">All shop</option>
                    @foreach($shops as $shop)
                    <option value="{{$shop['id']}}">{{$shop['name']}}</option>
                    @endforeach
                </select>
                <button class="submit" type="submit">店舗先決定</button>
                </div>
                </form>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>