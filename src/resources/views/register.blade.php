@extends('layouts.auth')

@section('main')
<div class="container">
    <div class="container_header">
        <p class="header_name">Registration</p>
    </div>
    <div class="content">
        <form class="form" action="/register" method="post">
            @csrf
            <div class="input">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 30px; height: 30px; opacity: 1;" xml:space="preserve">
                <style type="text/css">
	                .st0{fill:#4B4B4B;}
                </style>
                <g>
	                <path class="st0" d="M490.4,511.96c-4.32-20.56-8.96-39.76-12.48-65.2c-2.4-17.92-12.16-27.44-32.08-38.48L318.596,340.78
		            l0.136-0.106l0.148-0.074l-4-33.76c0,0,0.079-0.08,0.24-0.24h-0.012c1.36-1.25,13.024-12.076,21.987-24.056
		            c12.018-16.023,15.399-50.295,15.399-50.295s9.08-6.499,13.71-11.662c6.587-7.121,12.284-22.076,11.751-39.257
		            c-0.446-13.352-12.285-20.919-16.648-18.961c35.696-59.286-11.661-132.548-11.661-132.548C358.817,23.234,354.276,0,354.276,0
		            s-25.191,15.489-52.61,11.038c-27.418-4.362-78.781,2.226-78.781,2.226s-33.816,4.74-56.185,25.057
		            c-27.25,24.75-30.75,43.75-24.911,81.142c2.608,16.698,9.614,42.64,9.703,43.441c-3.383-3.561-17.002,4.184-17.447,18.426
		            c-0.534,17.181,5.163,32.136,11.75,39.257c4.629,5.163,11.929,11.662,11.929,11.662s5.164,34.272,17.18,50.295
		            c8.964,11.98,20.628,22.806,21.988,24.056h-0.012c0.16,0.16,0.24,0.24,0.24,0.24l-4,33.76l0.242,0.194L66.131,408.277
		            c-19.931,11.043-29.63,20.543-32.08,38.455c-3.03,22.154-6.926,39.575-10.736,57.32c-0.575,2.583-1.148,5.198-1.715,7.908h0.034
		            c-0.003,0.014-0.005,0.026-0.008,0.04h468.748c-0.003-0.014-0.006-0.026-0.009-0.04H490.4z" style="fill: rgb(75, 75, 75);"></path>
                </g>
                </svg>
                <input class="name" type="text" name="name" placeholder="Username" value="{{old('name')}}">
                @error('name')
                <p class="error">{{$errors->first('name')}}
                @enderror
            </div>
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
                <input class="email" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                <p class="error">{{$errors->first('email')}}
                @enderror
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
                @error('password')
                <p class="error">{{$errors->first('password')}}
                @enderror
            </div>
            <div class="button">
                <button class="submit" type="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection