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
// ---- place for additional code for pages ----
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
})