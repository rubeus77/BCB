@extends('layouts.app')
<!-- TODO: zmienić kontent na właściwy z listą członków -->
@section('content')
<div class="container members">
    <!-- TODO: poprawić klasy -->
    <div class="members-search">
        
        <div class="search row">
            <div class="form-group col-2">
                <label for="addMember"></label>
                <button id="addMember" class="clearButton"><a href="{{url('/members/create')}}" class="btn btn-primary">Dodaj członka</a></button>
            </div>
            <!-- TODO: zastanoić się nad logiką przeszukiwania -->
            <div class="form-group col-3">
                <label for="cardStatus">Status Członka</label>
                <select type="number" class="form-control" id="cardStatus">
                    @foreach($members_statusses as $member_status)
                        <option value="{{$member_status->id}}">{{$member_status->name}}</option>
                    @endforeach  
                </select>
            </div>
            <div class="form-group col-3">
                <label for="cardStatus">Status karty</label>
                <select type="number" class="form-control" id="cardStatus">
                    @foreach($print_statusses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                    @endforeach  
                </select>
            </div>
        </div>

    </div>  
    <table class="table table-striped">
        <thead>
            <tr>
              <td>Numer karty</td>
              <td>Imię i nazwisko</td>
              <td>Status członka</td>
              <td>Status karty</td>
              <td colspan="2">Działania</td>
            </tr>
        </thead>
        <tbody>

        <!-- Przykładowe dane -->
        <tr>
            <td>79</td>
            <td>Rafał Nowak</td>
            <td>Bez opłaconej składki</td>
            <td>Wydrukowana, nie wydana</td>
            <td>Szczegóły</td>
            <td>Edytuj</td>
        </tr>
        <tr>
            <td>76</td>
            <td>Rafał Pisarek</td>
            <td>Członek zarządu</td>
            <td>Wydana</td>
            <td>Szczegóły</td>
            <td>Edytuj</td>
        </tr>
            @foreach($members as $member)
            <tr>
                <td>{{$member->card_number}}</td>
                <td>{{$member->first_name}} {{$member->last_name}}</td>
                <td><!-- TODO: do zrobienia odczyt statusu członka--></td>
                <td><!-- TODO: do zrobienia odczyt statusu karty --></td>
                <td>Szczegóły</td>
                <td>Edytuj</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@endsection