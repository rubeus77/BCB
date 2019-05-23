<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="container">
                <div class="logo">

                </div>
                <ul class="menu">
                    @guest 
                    <li class="myButton"><a href="{{ route('login') }}">{{ __('Zaloguj') }}</a></li>
                    <!-- FIXME: w późniejszym czasie wyczyścić możliwość rejestrowania -->
                    @if(Route::has('register'))
                        <li class="myButton"><a href="{{ route('register') }}">{{ __('Zarejestruj')}}
                    @endif
                    @else
                    <!-- FIXME: usupełnić odpowiednie drogi dla przycisków Członkowie i Płatności -->
                    <li class="myButton"><a href="#">Członkowie</a></li>
                    <li class="myButton"><a href="#">Płatności</a></li>
                    <!-- <li class="myButton"><a href="{{ route('register') }}">{{ __('Zarejestruj')}}</a></li> -->
                    <li class="myButton"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Wyloguj')}}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                        @csrf 
                        </form>
                    @endguest
                </ul>
            </nav>
        </header>

        <main class="container">
            @yield('content')
        </main>
    </div>
</body>
</html>
