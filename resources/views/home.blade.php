@extends('layouts.app')

@section('content')
<div class="container main-page">

    <h1>Witaj {{ Auth::user()->name }} w bazie członków </h1>
    <h2>Stowarzyszenia Bears of Poland</h2>
    <h2>Krótka insturkcja obsługi<h2>
    <p>Przycisk <span>Członkowie</span> służy do wyświetlenia listy członków będących z bazie danych </p>
    <p>Przycisk <span>Płatności</span> służy do wyświetlenia list wpłat dokonanych przez członków na konto stowarzyszenia </p>
    <p>Przycisk <span>Wyloguj</span> zamyka sesję i przenosi do strony głównej </p>
    <p>Wszelkie uwagi dotyczące działania prosze kierować na e-mail: rubeus77(małpa)gmail(kropka)com</p>
</div>

@endsection
