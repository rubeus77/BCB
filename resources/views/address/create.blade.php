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


    <form method="POST" action="{{route('address.store')}}">
        @csrf
        <div class="form row">
            <div class="form-group col">
                <label for="line1">Linia 1</label>
                <input type="text" class="form-control" id="line1" name="line1" placeholder="" />
            </div>
            <div class="form-group col">
                <label for="line2">Linia 1</label>
                <input type="text" class="form-control" id="line2" name="line2" placeholder="" />
            </div>
        </div>
        <div class="form row">
            <div class="form-group col">
                <label for="city">Miasto</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="" />
            </div>
            <div class="form-group col">
                <label for="post_code">Kod pocztowy</label>
                <input type="text" class="form-control" id="post_code" name="post_code" placeholder="" />
            </div>
            <div class="form-group col">
                <label for="country">Państwo</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="" />
            </div>
        </div>
    </form>
</div>
@endsection