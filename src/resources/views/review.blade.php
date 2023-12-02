<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/review.css') }}">
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
        <header class="review_header">レビュー一覧</header>
        <div class="review">
            @foreach($reviews as $review)
            <table class="review_list">
                <tr>
                    <th class="label">ユーザー名</th>
                    <td class="name">{{$review['user']['name']}}</td>
                </tr>
                <tr>
                    <th class="label">評価点</label>
                    <td class="score">{{$review->getStar()}}</td>
                </tr>
                <tr>
                    <th class="label">コメント</th>
                    <td class="comment">{{$review['comment']}}</td>
                </tr>
            </table>
            @endforeach
        </div>
        <div class="move">
            <a class="post_page" href="{{route('evaluation',$shop->id)}}">投稿ページへ</a>
        </div>
    </main>

</body>
</html>