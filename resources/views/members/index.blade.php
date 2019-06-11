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
@section('modal')
<div id="formModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class='modal-title'></h4> 
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>

@endsection
@section('js')
<script>

$(document).ready(function(){

    //find table in members view
    let isTable=($('#members_table').attr('id'))
    console.log((isTable== undefined)?"tak":"nie")

    $('#members_table').DataTable({
        
        processing: true,
        serverSide: true,
        ajax:{
            //FIXME: zastanowić się nad tą ścieżką dlaczego blade jej nie zamienia na poprawną
            //chyba będzie najlepiej to zrobić przez pole ukryte i wyszukanie go już w JS. teraz nie jest route zamieniany na ścieżkę gdyż nie jest on częscią BLADE i jest parsowany przez normalny parser a nie parser związany z blade
            //url: "{{ route('members.index')}}",
            url:"/members"
        },
  
        columns:[
            {
                data: 'card_number',
                name: 'card_number'
            },{
                data: 'first_name',
                name: 'first_name'
            },{
                data: 'last_name',
                name: 'last_name'
            },{
                data: 'member_status',
                name: 'member_status'
            },{
                data: 'card_status',
                name: 'card_status'
            },{
                data: 'action',
                name: 'action',
                orderable: false
            }
        ]
    });
    let modalView=$('#formModal');
    let modalTitle=modalView.find(".modal-title");
    let modalBody=modalView.find('.modal-body');
    $(document).on('click', '.info_member', function(){
        let id = $(this).attr('id');
        console.log("kliknieto Info")
       
        $.ajax({
            url: "/members/"+id,
            method: "GET",
            dataType: "json"
        }).done(resp=>{
            
            //console.log(resp);   
            buildModal(resp);         
        }).fail(err=>{
            console.log("błąd");
            console.log(err);
        });
    });

    //blok tworzący informacje do modalu
    buildModal=(resp)=>{
        let member=resp.member_data;
        let address=resp.member_address;
        let bodyHTML="";
        console.log(address)
        $(modalTitle).text("Dane " + member.first_name + " "+ member.last_name)
        //create modal body with data from ajax query to database
        bodyHTML ="<p> Imię i Nazwisko (pseudonim): <span>" + member.first_name + " " + member.last_name;
        (member.screen_name!="")? bodyHTML+= " (" + member.screen_name + ")</span></p>":bodyHTML+="</span></p>";
        
        bodyHTML+="<p>tel: <span>"+ member.tel1;
        (member.tel2!="" && member.tel2!= undefined)?(bodyHTML+=" / "+ member.tel2 + "</span></p>"):(bodyHTML+="</span></p>");
        
        bodyHTML+="<p>e-mail: <span>"+ member.email1;
        (member.email2!="" && member.email2!= undefined)?(bodyHTML+=" / "+ member.email2 + "</span></p>"):(bodyHTML+="</span></p>");

        bodyHTML+="<p> Adres: <span>"+ address.line1 +"; ";
        if(address.line2!="" && address.line2!= undefined){bodyHTML+= address.line2 + "; "}
        bodyHTML+=address.post_code + " " + address.city + "; "+ address.country + "</span></p>"

        modalBody.html(bodyHTML)
        modalView.modal('show')
    }
})
</script>
@endsection