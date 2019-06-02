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
        <a href="{{ url('/address/create')}}" class="btn btn-primary">Nowy adres</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Miasto</td>
                    <td>Kod poczt.</td>
                    <td>Ulica i numer domu</td>
                    <td colspan="2">Działania</td>
                </tr>
            </thead>
            <tbody>
            @foreach($addresses as $address)
                <tr>
                    <td>{{$address->city}}</td>
                    <td>{{$address->post_code}}</td>
                    <td>{{$address->line1}} 
                    @if(!empty($address->line2))
                    <br /> {{$address->line2}}
                    @endif
                    </td>

                    <td><a href="{{ route('address.edit', $address->id) }}" class="btn btn-success">Modyfikuj</a></td>
                    <td>
                        <form action="{{ route('address.destroy', $address->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Usuń</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection