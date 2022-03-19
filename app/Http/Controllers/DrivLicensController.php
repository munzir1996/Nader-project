<?php

namespace App\Http\Controllers;

use App\driv_licens;
use Illuminate\Http\Request;

class DrivLicensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('hi');
        $driving =driv_licens::all();
        return view('pro.driving' , compact('driving'));
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
     * @param  \App\driv_licens  $driv_licens
     * @return \Illuminate\Http\Response
     */
    public function show(driv_licens $driv_licens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\driv_licens  $driv_licens
     * @return \Illuminate\Http\Response
     */
    public function edit(driv_licens $driv_licens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\driv_licens  $driv_licens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, driv_licens $driv_licens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\driv_licens  $driv_licens
     * @return \Illuminate\Http\Response
     */
    public function destroy(driv_licens $driv_licens)
    {
        //
    }
}
