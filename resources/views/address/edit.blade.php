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


    <form method="POST" action="{{route('address.update', $address->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form row">
            <div class="form-group col">
                <label for="line1">Linia 1</label>
                <input type="text" class="form-control" id="line1" name="line1" placeholder="" value="{{$address->line1}}" />
            </div>
            <div class="form-group col">
                <label for="line2">Linia 1</label>
                <input type="text" class="form-control" id="line2" name="line2" placeholder="" value="{{$address->line2}}" />
            </div>
        </div>
        <div class="form row">
            <div class="form-group col">
                <label for="city">Miasto</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="" value="{{$address->city}}" />
            </div>
            <div class="form-group col">
                <label for="post_code">Kod pocztowy</label>
                <input type="text" class="form-control" id="post_code" name="post_code" placeholder="" value="{{$address->post_code}}" />
            </div>
            <div class="form-group col">
                <label for="country">Państwo</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="" value="{{$address->country}}" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Aktualizuj</button>
    </form>
</div>
@endsection