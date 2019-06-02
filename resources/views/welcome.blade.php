<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <!-- tutaj - miejsce na linki do skryptów JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- tutaj - miejsce na ewentalne dodatkowe style css -->
        <!-- UWAGA: asset - ustawia na katalog bierzący strony -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('bop-logo-czarna-lapa-bialy-napis.png')}}" width="80" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Zaloguj</a></li>
                            <!-- FIXME: rejestracja - do późniejszego usunięcia -->
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Zarejestruj</a> </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav>
        </header>
        <section>
            <div>
                    <h1>Baza Danych Członków</h1>
                    <h1>Stowarzyszenia </h1>
                    <h1>Bears of Poland</h1>
            </div>
            
        </section>
    </body>
</html>