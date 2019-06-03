@extends('layouts.app')
@section('content')
    <div class="accordion" id="accordionMembers">
        <!-- TODO: Uzupełnić przesył formularza w method i action -->
        <form >
            <!-- blok of personal data inputs -->
            <div class="card">
                <div class="card-header" id="headingPersonalData">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#personalData" aria-expanded="true" aria-controls="personalData">
                            Dane Osobowe
                        </button>
                    </h5>
                </div>
            </div>
            <div id="personalData" class="collapse show" aria-labelledby="headingPersonalData" data-parent="#accordionMembers">
                <div class="card-body">
                    <div class="form-row">
                            <div class="form-group col">
                                <label for="firstName">Imię/Imiona</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" />
                            </div>
                            <div class="form-group col">
                                <label for="lasttName">Nazwisko</label>
                                <input type="text" class="form-control" id="lasttName" placeholder="" />
                            </div>
                            <div class="form-group col">
                                <label for="screenName">Pseudonim</label>
                                <input type="text" class="form-control" id="screenName" placeholder="" />
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="birthDate">Data urodzenia</label>
                            <input type="date" class="form-control" id="birthDate" placeholder="" />
                        </div>
                        <div class="form-group col">
                            <label for="tel1">Telefon 1</label>
                            <input type="tel" class="form-control" id="tel1" placeholder="" />
                        </div>
                        <div class="form-group col">
                            <label for="tel2">Telefon 2</label>
                            <input type="tel" class="form-control" id="tel2" placeholder="" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="email1">E-mail 1</label>
                            <input type="email" class="form-control" id="email1" placeholder="" />
                        </div>
                        <div class="form-group col">
                            <label for="email2">E-mail 2</label>
                            <input type="email" class="form-control" id="email2" placeholder="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- blok of addresses inputs and selector -->
            <div class="card">
                <div class="card-header" id="headingAddressesData">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#addressesData" aria-expanded="false" aria-controls="addressesData">
                            Adres/Adresy
                        </button>
                    </h5>
                </div>
            </div>
            <div id="addressesData" class="collapse" aria-labelledby="headingAddressesData" data-parent="#accordionMembers">
                <div class="card-body">
                    <p>TODO: Wprowadzić selektor</p>
                    <p>TODO: Wprowadzić AJAX</p>
                    <p>TODO: Wprowadzić pola z wypisywaniem wartości w zależności od selektora</p>
                </div>
            </div>
            <!-- blok of Member Status -->
            <div class="card">
                <div class="card-header" id="headingMemberStatus">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#membersStatus" aria-expanded="false" aria-controls="membersStatus">
                            Status Członka
                        </button>
                    </h5>
                </div>
            </div>
            <div id="membersStatus" class="collapse" aria-labelledby="headingMemberStatus" data-parent="#accordionMembers">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="statusType">Typ statusu</label>
                            <select id="statusType" class="form-control">
                                @foreach($members_statusses as $member_status)
                                    <option value="{{ $member_status->id }}">{{$member_status->name}}</option>
                                @endforeach  
                            </select>
                        </div>
                        <div class="form-group col-2">
                            <label for="addStatusBtn">Dodaj status</label>
                            <input type="button" class="form-control btn btn-primary" id="addStatusBtn" value="Dodaj" />
                            <!-- TODO: dodać obsługę przycisku - dodanie nowego statusu i odświeżenie przez AJAX - modal z ajaxem -->
                        </div>
                        <div class="form-group col">
                            <label for="enterDate">Data wstąpienia</label>
                            <input type="date" class="form-control" id="enterDate" />
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="enterScanURL">Skan dokumentu opuszczenia</label>
                            <input type="url" class="form-control" id="enterScanURL" />
                        </div>
                        <div class="form-group col">
                            <label for="acceptScanURL">Skan dokumentu opuszczenia</label>
                            <input type="url" class="form-control" id="acceptScanURL" />
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="leaveDate">Data opuszczenia</label>
                            <input type="date" class="form-control" id="leaveDate" />
                        </div>
                        <div class="form-group col">
                            <label for="leaveScanURL">Skan dokumentu opuszczenia</label>
                            <input type="url" class="form-control" id="leaveScanURL" />
                        </div>
                        <div class="form-group col">
                            <label for="leaveReason">Przyczyna opuszczenia</label>
                            <textarea class="form-control" id="leaveReason"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blok of Card Status -->
            <div class="card">
                <div class="card-header" id="headingCardStatus">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cardStatus" aria-expanded="false" aria-controls="cardStatus">
                            Status Karty
                        </button>
                    </h5>
                </div>
            </div>
            <div id="cardStatus" class="collapse" aria-labelledby="headingCardStatus" data-parent="#accordionMembers">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-2">
                            <label for="cardNumber">Nr Karty</label>
                            <input type="number" class="form-control" id="cardNumber" min="1" />
                        </div>
                        <div class="form-group col">
                                <label for="nameOnCard">Nazwa na karcie</label>
                                <input type="text" class="form-control" id="nameOnCard" />
                            </div>
                        <div class="form-group col-3">
                            <label for="cardStatus">Status karty</label>
                            <select type="number" class="form-control" id="cardStatus" name="cardStatus">
                                @foreach($print_statusses as $print_status)
                                    <option value="{{$print_status->id}}">{{$print_status->name}}</option>
                                @endforeach 
                            </select>
                        </div>
                        <div class="form-group col-2">
                            <!-- TODO: dodać obsługę przycisku - dodanie nowego statusu i odświeżenie przez AJAX -->
                            <label for="addCardStatusBtn">Dodaj status karty</label>
                            <input type="button" class="form-control btn btn-primary" id="addCardStatusBtn" value="Dodaj" />
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Dodaj członka" /> 
        </form>
    </div>
@endsection