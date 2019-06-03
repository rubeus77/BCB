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
              <th>Numer karty</th>
              <th>Imię i nazwisko</th>
              <th>Status członka</th>
              <th>Status karty</th>
              <th colspan="2">Działania</th>
              <th colspan="2">Płatności</th>
            </tr>
        </thead>
        <tbody>

        <!-- Przykładowe dane -->
        <tr>
            <td>79</td>
            <td>Rafał Nowak</td>
            <td>Bez opłaconej składki</td>
            <td>Wydrukowana, nie wydana</td>
            <td> <a href="#" class="btn btn-outline-primary">Szczegóły</a></td>
            <td> <a href="#" class="btn btn-outline-danger">Edytuj</a></td>
            <td> <a href="#" class="btn btn-outline-success">Pokaż</a></td>
            <td> <a href="#" class="btn btn-outline-dark">Dodaj</a></td>
        </tr>
        <tr>
            <td>76</td>
            <td>Rafał Pisarek</td>
            <td>Członek zarządu</td>
            <td>Wydana</td>
            <td> <a href="#" class="btn btn-outline-primary">Szczegóły</a></td>
            <td> <a href="#" class="btn btn-outline-danger">Edytuj</a></td>
            <td> <a href="#" class="btn btn-outline-success">Pokaż</a></td>
            <td> <a href="#" class="btn btn-outline-dark">Dodaj</a></td>
        </tr>
            @foreach($members as $member)
            <tr>
                <td>{{$member->card_number}}</td>
                <td>{{$member->first_name}} {{$member->last_name}}</td>
                <td><!-- TODO: do zrobienia odczyt statusu członka--></td>
                <td><!-- TODO: do zrobienia odczyt statusu karty --></td>
                <td> <a href="#" class="btn btn-outline-primary">Szczegóły</a></td>
                <td> <a href="#" class="btn btn-outline-danger">Edytuj</a></td>
                <td> <a href="#" class="btn btn-outline-success">Pokaż</a></td>
                <td> <a href="#" class="btn btn-outline-dark">Dodaj</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 
<!-- modal blok -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dane osobowe dla {{</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection