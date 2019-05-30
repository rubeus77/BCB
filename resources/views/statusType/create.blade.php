@extends('layouts.app')
@section('content')
<!-- początek sekcji "create" -->
<div class="container">
    <!-- sprawdzenie bledow wypełnienia formularza-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br /> 
        @endif
    <!-- formularz do wypełnienia -->
        <h2>Podaj nazwę nowego typu Statusu członka</h2>
        <form method="post" action="{{ route('statusType.store') }}">
            @csrf
            <input type="text" class="form-control" name="status_type" id="status_type" />
            <button type="submit" class="btn btn-primary">Dodaj</button>
        </form>
</div>
<!-- koniec sekcji "create" -->
@endsection
