<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrintStatus;

class PrintStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
            $print_statusses=PrintStatus::all();
            return response()->json(["types"=>$print_statusses]);
        }
        $print_statusses=PrintStatus::all();
       return view('printStatus.index', compact('print_statusses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('printStatus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['print_status'=>'required']);
        
        $print_status= new PrintStatus([
            'name'=>$request->get('print_status')
        ]);
        $print_status->save();

        return redirect('printStatus')->with('success', 'Nowy status druku/wydania karty dodany!');

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
        $status = PrintStatus::find($id);
        return view('printStatus.edit', compact('status')); 
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
            'print_status'=>'required'
        ]);
        $print_status= PrintStatus::find($id);
        $print_status->name = $request->get('print_status');
        $print_status->save();

        return redirect('printStatus')->with('success', 'Pozytywnie zmieniono nazwę statysy karty');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = PrintStatus::find($id);
        $status->delete();

        return redirect('printStatus')->with('success', 'Status usunięty');
    }
}
