<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{

    public function index()
    {
        $addresses=DB::table('addresses')->orderBy('city', 'desc')->get();
        return view('address.index', compact('addresses'));
    }

    public function create()
    {
        return view('address.create');
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
            'line1'=>'required',
            'city'=>'required',
            'post_code'=>'required',
            'country'=>'required'
        ]);

        $address= new Address([
            'line1'=>$request->get('line1'),
            'line2'=>$request->get('line2'),
            'city'=>$request->get('city'),
            'post_code'=>$request->get('post_code'),
            'coutry'=>$request->get('country')
        ]);
        
        $address->save();
        return redirect('/address')->with('success', 'Pomyślnie dodano nowy adres.');
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
        $address= Address::find($id);
        return view('address.edit', compact('address'));
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
            'line1'=>'required',
            'city'=>'required',
            'post_code'=>'required',
            'country'=>'required'
        ]);

        $address = Address::find($id);
        $address->line1 = $request->get('line1');
        $address->line2 = $request->get('line2');
        $address->city = $request->get('city');
        $address->post_code = $request->get('post_code');
        $address->coutry = $request->get('country');
    
        
        $address->save();
        return redirect('/address')->with('success', 'Pomyślnie zaaktualizowano adres.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address=Address::find($id);
        $address->delete();

        return redirect('address')->with('success', 'Adres usunięty');
    }
}
