<p>予約確認メール</p>

<p>店舗名:{{$reservation->shop->name}}</p>
<p>来店時間:{{$reservation->time->getTime()}}</p>
<p>ご予約人数:{{$reservation->person->getPerson()}}</p>

<p>来店された際にこちらのQRコードをスタッフにご提示ください</p>
{!! QrCode::generate('https://www.example.com') !!}
