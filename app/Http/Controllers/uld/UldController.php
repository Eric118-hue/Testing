<?php

namespace App\Http\Controllers\uld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Uld;
use App\Models\SacPostaux;

class UldController extends Controller
{
    /**
     * Get all sacpostaux data of a particular uld
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSacpostaux(Request $req)
    {
        $uld = Uld::all();
        // $sac = Uld::all()->sacpostauxs;

        return view('test', compact('uld'));
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
        $uld = Uld::all();
        $ulds = Uld::find($id);

        return view('sac')->compact('uld', 'ulds');
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
