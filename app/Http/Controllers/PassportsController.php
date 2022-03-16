<?php

namespace App\Http\Controllers;

use App\Passports;
use Illuminate\Http\Request;

class PassportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $passport =passports::all();
        return view('pro.passport' , compact('passport'));
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
     * @param  \App\Passports  $passports
     * @return \Illuminate\Http\Response
     */
    public function show(Passports $passports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Passports  $passports
     * @return \Illuminate\Http\Response
     */
    public function edit(Passports $passports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Passports  $passports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passports $passports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Passports  $passports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passports $passports)
    {
        //
    }
}
