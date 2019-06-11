/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
 require( 'datatables.net-bs4' )
// // ---- place for additional code for pages ----

// //----- przeniesione do indywidualnych plików z widokami. 

// $(document).ready(function(){

//     //find table in members view
//     let isTable=($('#members_table').attr('id'))
//     console.log((isTable== undefined)?"tak":"nie")

//     $('#members_table').DataTable({
        
//         processing: true,
//         serverSide: true,
//         ajax:{
//             //FIXME: zastanowić się nad tą ścieżką dlaczego blade jej nie zamienia na poprawną
//             //chyba będzie najlepiej to zrobić przez pole ukryte i wyszukanie go już w JS. teraz nie jest route zamieniany na ścieżkę gdyż nie jest on częscią BLADE i jest parsowany przez normalny parser a nie parser związany z blade
//             //url: "{{ route('members.index')}}",
//             url:"/members"
//         },
  
//         columns:[
//             {
//                 data: 'card_number',
//                 name: 'card_number'
//             },{
//                 data: 'first_name',
//                 name: 'first_name'
//             },{
//                 data: 'last_name',
//                 name: 'last_name'
//             },{
//                 data: 'member_status',
//                 name: 'member_status'
//             },{
//                 data: 'card_status',
//                 name: 'card_status'
//             },{
//                 data: 'action',
//                 name: 'action',
//                 orderable: false
//             }
//         ]
//     });
//     let modalView=$('#formModal');
//     let modalTitle=modalView.find(".modal-title");
//     let modalBody=modalView.find('.modal-body');
//     $(document).on('click', '.info_member', function(){
//         let id = $(this).attr('id');
//         console.log("kliknieto Info")
       
//         $.ajax({
//             url: "/members/"+id,
//             method: "GET",
//             dataType: "json"
//         }).done(resp=>{
            
//             //console.log(resp);   
//             buildModal(resp);         
//         }).fail(err=>{
//             console.log("błąd");
//             console.log(err);
//         });
//     });

//     //blok tworzący informacje do modalu
//     buildModal=(resp)=>{
//         let member=resp.member_data;
//         let address=resp.member_address;
//         let bodyHTML="";
//         console.log(address)
//         $(modalTitle).text("Dane " + member.first_name + " "+ member.last_name)
//         //create modal body with data from ajax query to database
//         bodyHTML ="<p> Imię i Nazwisko (pseudonim): <span>" + member.first_name + " " + member.last_name;
//         (member.screen_name!="")? bodyHTML+= " (" + member.screen_name + ")</span></p>":bodyHTML+="</span></p>";
        
//         bodyHTML+="<p>tel: <span>"+ member.tel1;
//         (member.tel2!="" && member.tel2!= undefined)?(bodyHTML+=" / "+ member.tel2 + "</span></p>"):(bodyHTML+="</span></p>");
        
//         bodyHTML+="<p>e-mail: <span>"+ member.email1;
//         (member.email2!="" && member.email2!= undefined)?(bodyHTML+=" / "+ member.email2 + "</span></p>"):(bodyHTML+="</span></p>");

//         bodyHTML+="<p> Adres: <span>"+ address.line1 +"; ";
//         if(address.line2!="" && address.line2!= undefined){bodyHTML+= address.line2 + "; "}
//         bodyHTML+=address.post_code + " " + address.city + "; "+ address.country + "</span></p>"

//         modalBody.html(bodyHTML)
//         modalView.modal('show')
//     }
// })