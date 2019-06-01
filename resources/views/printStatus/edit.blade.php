@extends('layouts.app')
@section('content')
<div class="container">
<!-- blok błędów -->
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
<!-- blok formularza do podania nazwy -->
        <h2>Zmień nazwę statusu dla druku/wydania karty</h2>
        <form method="post" action="{{ route('printStatus.update', $status->id)}}">
            @csrf
            @method('PATCH')
            <input type="text" class="form-control" name="print_status" id="print_status" value="{{ $status->name }}"/>
            <button type="submit" class="btn btn-primary">Aktualizuj</button>
        </form>
</div>
@endsection