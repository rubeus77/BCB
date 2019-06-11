<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\StatusType;
use App\PrintStatus;
use App\MemberStatus;
use App\CardStatus;
use App\Address;
class MemberController extends Controller
{

    public function index()
    {
      //TODO: dokończyć CardStatus po uzupełnieniu tabeli CardStatus
        if (request()->ajax()){
            
            $card_status="blada";
            return datatables()->of(Member::select('card_number','first_name','last_name', 'id')->get())
                ->addColumn('member_status',function($data){
                    //get() zwraca tablicę z obiektami. obiekty zawierają wszystkie dane w postaci nazwa_kolumny: wartość
                    //można to zastąpić get('nazwa_kolumny') wtedy zwraca tablicę z obiektem z jednym kluczem i wartością. Kluczem jest zawsze nazwa kolumny
                    $member_status_index=(MemberStatus::where('id', $data->id)->get())[0]->status_type;
                    $member_ststus_type=(StatusType::where('id', $member_status_index)->get())[0]->name;

                    return $member_ststus_type;
                })
                ->addColumn('card_status', function($data){
                    $card_status = CardStatus::where('id', $data->id)->get();
                    $card_status.="uzupełnić CardStatus";
                    
                    return $card_status;
                })
                ->addColumn('action', function($data){
                    $button='<i class="fas fa-user edit_member_status" name="edit_member_status"  id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="far fa-credit-card edit_card_status" name="edit_card_status" id="'.$data->id.'"></i>';
                    $button.='&nbsp;&nbsp;';
                    $button.='<i class="fas fa-user-edit edit_member" name="edit_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="far fa-id-card info_member" name="info_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;&nbsp;';
                    $button.='<i class="fas fa-search-dollar payment_member" name="payment_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="fas fa-hand-holding-usd payment_member_add" name="payment_member_add" id="'.$data->id.'"></i>';
                    
                    return $button;
                })
                ->rawColumns(['member_status', 'card_status','action'])
                ->make(true);
        }

        return view('members.index');
    }

    public function create()
    {
        $members_statusses=StatusType::all();
        $print_statusses=PrintStatus::all();
        $addresses=Address::all();
        return view('members.create', compact(['members_statusses', 'print_statusses', 'addresses']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(request()->ajax()){
        $member_data=Member::findOrFail($id);
        //TODO: do zmiany na rzeczywisty po dodaniu pełnego "create"
        $member_address=(object)[
            'line1'=> 'Dupa 30',
            'city'=> 'Błonie',
            'post_code'=>'30-611',
            'country'=> 'XXXX',
        ];
        //TODO: dodać status członka i informację od kiedy. Linki do deklaracji, itp. Dodać informacje o Statusie karty 
        return response()->json(['member_data' => $member_data, 'member_address'=>$member_address]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
