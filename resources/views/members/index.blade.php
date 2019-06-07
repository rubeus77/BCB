@extends('layouts.app')

@section('content') <!-- content jest już w klasie "cointaner" i nie trzeba dodawać jej drugi raz -->
  <!-- przycisk dodania członka - początek bloku -->
  <div class="d-flex justify-content-end">
      <a href="{{url('/members/create')}}" class="btn btn-primary">Dodaj członka</a>
  </div>
  <!-- przycisk dodania członka - koniec bloku -->

  <!-- div oddzielający -->
  <div class="w-100"><br/></div>

  <!-- tabela z listą członków -->
  <div class="table-responsive">
    <table class="table table-bordered table-striped" id="members_table">
      <thead>
        <tr class="d-table-row">
          <th class="col-1 align-middle">Nr <br />karty</th>
          <th class="col-2 align-middle">Imię</th>
          <th class="col-2 align-middle">Nazwisko</th>
          <th class="col-2 align-middle">Status członka</th>
          <th class="col-2 align-middle">Status karty</th>
          <th class="col-2 align-middle">Inne działania</th>
        </tr>
      </thead>
    </table>
  </div>
    
@endsection