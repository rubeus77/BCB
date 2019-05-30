<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\StatusType;
use App\PrintStatus;

class MemberController extends Controller
{

    public function index()
    {
        $members=Member::all();
        $members_statusses=StatusType::all(); 
        $print_statuses=PrintStatus::all();
        return view('members.index', compact(['members', 'members_statusses', 'print_statuses']));
    }

    public function create()
    {
        $members_statusses=StatusType::all(); 
        $print_statuses=PrintStatus::all();
        return view('members.create', compact(['members_statusses', 'print_statuses']));
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
