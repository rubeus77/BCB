<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusType;

class StatusTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_types=StatusType::all();
        return view('statusType.index', compact('status_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('statusType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'status_type'=>'required'
        ]);

        $status_type = new StatusType([
            'name' => $request->get('status_type')
        ]);
        $status_type->save();
        // return redirect('statusType.index')->with('success', 'Nowy typ statusu członka dodany!');
        return redirect('statusType')->with('success', 'Nowy typ statusu członka dodany!');
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
        $status = StatusType::find($id);
        return view('statusType.edit', compact('status')); 
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
        $request->validate([
            'status_type'=>'required'
        ]);

        $status_type = StatusType::find($id);
        $status_type->name = $request->get('status_type');
        $status_type->save();
        return redirect('statusType')->with('success', 'Uaktualniono nazwę statusu członka!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = StatusType::find($id);
        $status->delete();

        return redirect('/statusType')->with('success', 'Status usunięty');
    }
}
