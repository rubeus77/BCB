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

                <ul class="menu"  >
                        <!-- Authentication Links -->
                        @guest
                            <li class="myButton">
                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="myButton">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="myButton"><a href="{{ url('/home')}}">Home</a></li>
                            <li class="myButton"><a href="{{ url('/members')}}">Członkowie</a></li>
                            <li class="myButton"><a href="#" onclick="alert('Jeszcze nie zrobione');">Płatności</a></li>
                            <li class="myButton" id="addBtn">Dodaj</li>
                                <ul class="menu-adds">
                                <!-- TODO:  uzupełnić linki -->
                                    <li class="myButton"><a href="{{ url('/members/create')}}">Członka</li>
                                    <li class="myButton"><a href="{{ url('/statusType')}}">Status karty</li>
                                    <li class="myButton"><a href="#">Status członka</li>
                                    <li class="myButton"><a href="#">Adres</li>
                                </ul>
                            <li class="myButton">
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
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
