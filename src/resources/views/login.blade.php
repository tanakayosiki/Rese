@extends('layouts.auth')

@section('main')
<div class="container">
    <div class="container_header">
        <p class="header_name">Login</p>
    </div>
    <div class="content">
        <form class="form" action="/login" method="post">
            @csrf
            <div class="input">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 512 512" style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
                <style type="text/css">
	                .st0{fill:#4B4B4B;}
                </style>
                <g>
	                <path class="st0" d="M496.563,68.828H15.438C6.922,68.828,0,75.75,0,84.281v30.391l256,171.547l256-171.563V84.281
		            C512,75.75,505.078,68.828,496.563,68.828z" style="fill: rgb(75, 75, 75);"></path>
	                <path class="st0" d="M0,178.016v203.391c0,34.125,27.641,61.766,61.781,61.766h388.438c34.141,0,61.781-27.641,61.781-61.766V178
		            L256,349.563L0,178.016z" style="fill: rgb(75, 75, 75);"></path>
                </g>
                </svg>
                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="input">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
                    <style type="text/css">
	                    .st0{fill:#4B4B4B;}
                    </style>
                <g>
	                    <path class="st0" d="M407.543,204.886v-53.345c0.016-41.722-17.033-79.835-44.392-107.153C335.849,17.028,297.736-0.016,256.002,0
		                c-41.738-0.016-79.85,17.028-107.153,44.388c-27.38,27.318-44.404,65.431-44.404,107.153v53.345H55.558v210.128
		                c0,53.572,43.437,96.986,97.002,96.986h206.898c53.565,0,96.985-43.413,96.985-96.986V204.886H407.543z M178.017,151.541
		                c0-10.867,2.178-21.035,6.108-30.342c5.889-13.956,15.822-25.937,28.274-34.349c12.513-8.429,27.306-13.274,43.603-13.29
		                c10.864,0,21.032,2.17,30.338,6.104c13.956,5.893,25.934,15.842,34.346,28.294c8.412,12.485,13.277,27.286,13.298,43.583v53.345
		                H178.017V151.541z M256.002,392.378c-27.672,0-50.114-22.442-50.114-50.11c0-27.676,22.442-50.11,50.114-50.11
		                c27.668,0,50.11,22.434,50.11,50.11C306.112,369.936,283.67,392.378,256.002,392.378z" style="fill: rgb(75, 75, 75);"></path>
                </g>
                </svg>
                <input class="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="button">
                <button class="submit" type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection