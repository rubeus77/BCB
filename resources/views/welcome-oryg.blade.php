<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <!-- ---wyłączona możliwość logowania -->
                            
                            <!-- @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif -->
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title">
                        Baza Członków 
                    </div>
                    <div class="title">
                    Bears of Poland
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
