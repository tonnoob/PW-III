<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pc;

class PcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcs = Pc::all();
        return view('pc', compact('pcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pc= new Pc();
        $pc -> idPc = $request -> txidPc;
        $pc -> Pc = $request -> txPc;

        $pc -> save();

        return redirect('/pc');
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
    public function destroy($idPc)
    {
        $pc = new Pc();
        $pc->where('idPc','=',$idPc)->delete();
        return redirect('/pc');
    }

    public function PcLista()
    {
        $pcs = Pc::all();
        
        return view('pc',compact('pcs'));
    }

    public function allPcs(){
        $pcs = Pc::all();      
        return $pcs;
    }
}
