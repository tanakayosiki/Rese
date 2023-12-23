<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
    <div class="admin">
        <p class="message">{{session('message')}}</p>
        <div class="content">
            <h1 class="content_header">代表者選択</h1>
            <div class="user_list">
                    @foreach($roles as $role)
                <div class="user">
                    <p class="name">{{$role['name']}}</p>
                    <div class="button">
                    <form class="form" action="{{route('attach',$role->id)}}" method="post">
                        @method('put')
                        @csrf
                    <input type="hidden" name="id"  id="id" value="{{$role->id}}">
                    <button class="attach" type="submit">代表者にする</button>
                    </form>
                    <form class="form" action="{{route('detach',$role->id)}}" method="post">
                        @method('put')
                        @csrf
                    <input type="hidden" name="id" id="id" value="{{$role->id}}">
                    <button class="detach" type="submit">利用者に戻す</button>
                    </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="shop_select">
            <a class="link" href="/admin/select">店舗先選択へ</a>
        </div>
        <div class="mail">
            <a class="send" href="/admin/mail">メール送信</a>
        </div>
    </div>
</body>
</html>