@extends('layouts.app')
@section('content')
    <div class="accordion" id="accordionMembers">
        <!-- TODO: Zmiana bazy danych Adres wciągnięty do danych Członka -->
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
                                <input type="text" class="form-control" id="firstName" name="first_name" required/>
                            </div>
                            <div class="form-group col">
                                <label for="lasttName">Nazwisko</label>
                                <input type="text" class="form-control" id="lasttName" name="last_name" required/>
                            </div>
                            <div class="form-group col">
                                <label for="screenName">Pseudonim</label>
                                <input type="text" class="form-control" id="screenName" name="screen_name"/>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="birthDate">Data urodzenia</label>
                            <input type="date" class="form-control" id="birthDate" name="birth_name" required/>
                        </div>
                        <div class="form-group col">
                            <label for="tel1">Telefon 1</label>
                            <input type="tel" class="form-control" id="tel1" name="tel1" required/>
                        </div>
                        <div class="form-group col">
                            <label for="tel2">Telefon 2</label>
                            <input type="tel" class="form-control" id="tel2" name="tel2"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="email1">E-mail 1</label>
                            <input type="email" class="form-control" id="email1" name="email1" required/>
                        </div>
                        <div class="form-group col">
                            <label for="email2">E-mail 2</label>
                            <input type="email" class="form-control" id="email2" name="email2"/>
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
                    <div class="form-group col">
                        <label for="line1">Linia 1</label>
                        <input type="text" class="form-control" id="line1" name="line1" required/>
                    </div>
                    <div class="form-group col">
                        <label for="line2">Linia 2</label>
                        <input type="text" class="form-control" id="line2" name="line2" />
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="city">Miasto</label>
                            <input type="text" class="form-control" id="city" name="city" required/>
                        </div>
                        <div class="form-group col-2">
                            <label for="post_code">Kod pocztowy</label>
                            <input type="text" class="form-control" id="post_code" name="post_code" required/>
                        </div>
                        <div class="form-group col-3">
                            <label for="country">Państwo</label>
                            <input type="text" class="form-control" id="country" name="country" required/>
                        </div>
                    </div>
                </div>
                <!-- TODO: dodać checkbox i powtórzenie adresu -->
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
                        <div class="form-group col">
                            <label for="enterDate">Data wstąpienia</label>
                            <input type="date" class="form-control" id="enterDate" name="enter_date" required/>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="enterScanURL">Skan deklaracji</label>
                            <input type="url" class="form-control" id="enterScanURL" name="enter_scan_URL" required/>
                        </div>
                        <div class="form-group col">
                            <label for="acceptScanURL">Skan decyzji przyjęcia</label>
                            <input type="url" class="form-control" id="acceptScanURL" name="accept_scan_URL"/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="leaveDate">Data opuszczenia</label>
                            <input type="date" class="form-control" id="leaveDate" name="leave_date"/>
                        </div>
                        <div class="form-group col">
                            <label for="leaveScanURL">Skan dokumentu opuszczenia</label>
                            <input type="url" class="form-control" id="leaveScanURL" name="leave_scan_URL"/>
                        </div>
                        <div class="form-group col">
                            <label for="leaveReason">Przyczyna opuszczenia</label>
                            <textarea class="form-control" id="leaveReason" name="leave_reason"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blok of Card Status -->
            <div class="card">
                <div class="card-header" id="headingCardStatus">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cardStatuss" aria-expanded="false" aria-controls="cardStatuss">
                            Status Karty
                        </button>
                    </h5>
                </div>
            </div>
            <div id="cardStatuss" class="collapse" aria-labelledby="headingCardStatus" data-parent="#accordionMembers">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-2">
                        <!-- TODO: zrobić zapytanie do bazy o ostatni numer karty i wprowadzić o 1 większy do pola -->
                            <label for="cardNumber">Nr Karty</label>
                            <input type="number" class="form-control" id="cardNumber" min="1" name="card_number"/>
                        </div>
                        <div class="form-group col">
                                <label for="nameOnCard">Nazwa na karcie</label>
                                <input type="text" class="form-control" id="nameOnCard" name="name_on_card"/>
                            </div>
                        <div class="form-group col-3">
                            <label for="cardStatus">Status karty</label>
                            <select type="number" class="form-control" id="cardStatus" name="cardStatus">
                                @foreach($print_statusses as $print_status)
                                    <option value="{{$print_status->id}}">{{$print_status->name}}</option>
                                @endforeach 
                            </select>
                        </div>
                       
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary float-right" value="Dodaj członka" /> 
        </form>
    </div>
@endsection

@section('js')
<script>
$(document).ready(function(){
    let first_name=$("#firstName");
    let last_name=$("#lastName");
    let name_on_card=$("#nameOnCard");
    $(first_name).on("blur", ()=>{
        $(name_on_card).val(first_name.val()+" "+last_name.val())
    }
    $(last_name).on("blur", ()=>{
        $(name_on_card).val(first_name.val()+" "+last_name.val())
    }
    // TODO: dorobić if leaveDate!=empty than leaveScanURL = required
})
</script>
@endsection