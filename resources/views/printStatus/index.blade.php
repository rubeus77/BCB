@extends('layouts.app')
@section('content')
<div class="container">
    <!-- blok błędów -->
    <div class="col-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    </div>
    <!-- blok tabeli z listą nazw statusow karty -->
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nazwa statusu karty</td>
                <td colspan="2">Działania</td>
            </tr>
        </thead>
        <tbody>
            @foreach($print_statusses as $status)
                <tr>
                    <td>{{$status->name}}</td>
                    <td><a href="{{ route('printStatus.edit', $status->id) }}" class="btn btn-success">Modyfikuj</a></td>
                    <td>
                        <form action="{{ route('printStatus.destroy', $status->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('printStatus/create')}}" class="btn btn-primary">Nowy</a>
</div>
@endsection