<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\StatusType;
use App\PrintStatus;
use App\MemberStatus;

class MemberController extends Controller
{

    public function index()
    {
        //---- this was without DataTables ----
        // $members=Member::all();
        // $members_statusses=StatusType::all(); 
        // $print_statusses=PrintStatus::all();
        // return view('members.index', compact(['members', 'members_statusses', 'print_statusses']));

        // ---- with DataTables
        if (request()->ajax()){
            $member_status="dupa";
            $card_status="blada";
            return datatables()->of(Member::select('card_number','first_name','last_name', 'id')->get())
                ->addColumn('member_status',function($data1){
                    $member_status=StatusType::where('id',$data1->id)->get();
                    $member_status.=MemberStatus::where('id', $data1->id)->get();
                    return $member_status;
                })
                //->addColumn('member_status', $member_status)
                ->addColumn('card_status', $card_status)
                ->addColumn('action', function($data){
                    $button='<i class="fas fa-user edit_member_status" name="edit_member_status"  id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="far fa-credit-card edit_card_status" name="edit_card_status" id="'.$data->id.'"></i>';
                    $button.='&nbsp;&nbsp;';
                    $button.='<i class="fas fa-user-edit edit_member" name="edit_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="far fa-id-card info_member" name="info_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;&nbsp;';
                    $button.='<i class="far fa-search-dollar payment_member" name="payment_member" id="'.$data->id.'"></i>';
                    $button.='&nbsp;';
                    $button.='<i class="far fa-hand-holding-usd payment_member_add" name="payment_member_add" id="'.$data->id.'"></i>';
                    $button.="cuj".$data->id;
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
        $print_statuses=PrintStatus::all();
        $print_statusses=PrintStatus::all();
        return view('members.create', compact(['members_statusses', 'print_statuses', 'print_statusses']));
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
        //
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
