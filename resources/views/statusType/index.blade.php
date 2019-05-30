@extends('layouts.app')
@section('content')
<div class="container">
    <!-- sparwdzenie poprawności danych -->
    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nazwa statusu</td>
                <td colspan="2">Działania</td>
            </tr>
        </thead>
        <tbody> 
            @foreach($status_types as $status)
            <tr>
                <td>{{$status->name}}</td>
                <td><a href="{{ route('statusType.edit', $status->id) }}" class="btn btn-success">Modyfikuj</a></td>
                <td>
                    <form action="{{ route('statusType.destroy', $status->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Usuń</button>
                    </form> 
                </td>

            <tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('statusType/create')}}" class="btn btn-primary">Nowy</a>
</div>
@endsection