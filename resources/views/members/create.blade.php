@extends('layouts.app')
@section('content')
        <!-- TODO: ZE WZGLĘDU NA ILOŚĆ DANYCH ROZWAŻYĆ AKORDEON -->
        <form class="container">
            <div class="form-part">
                <span>Dane personalne</span>
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
            <div class="form-part">
                <span>Adres/Adresy</span>
                <!-- TODO: tutaj trzeba zbudować z bazy danych -->
            </div>
            <div class="form-part">
                <span>Statut Członka</span>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="statusType">Typ statusu</label>
                        <select id="statusType" class="form-control">
                            @foreach($members_statusses as $member_status)
                                <option>{{$member_status->name}}</option>
                            @endforeach  
                        </select>
                    </div>
                    <div class="form-group col-2">
                        <label for="addStatusBtn">Dodaj status</label>
                        <input type="button" class="form-control btn btn-primary" id="addStatusBtn" value="Dodaj" />
                        <!-- TODO: dodać obsługę przycisku - dodanie nowego statusu i odświeżenie przez AJAX -->
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

            <div class="form-part">
                <span>Status Karty Członkowskiej</span>
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
                        <select type="number" class="form-control" id="cardStatus">
                            <!-- TODO: opcje z bazy danych - może AJAX -->
                            <option>euifgqei rfiqefieh ger</option>
                            <option>euifgqei </option>
                            <option>euifgqei rfdfs hhstr htrhfieh ger</option>
                            <option>euifgqei rfifgshzsfaw we rwera rdg fieh ger</option>
                        </select>
                    </div>
                    <div class="form-group col-2">
                        <!-- TODO: dodać obsługę przycisku - dodanie nowego statusu i odświeżenie przez AJAX -->
                        <label for="addCardStatusBtn">Dodaj status karty</label>
                        <input type="button" class="form-control btn btn-primary" id="addCardStatusBtn" value="Dodaj" />
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Dodaj członka" /> 
        </form>
    </body>
</html>
@endsection