<?php

namespace App\Http\Controllers;

use App\driv_license;
use Illuminate\Http\Request;

class DrivLicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driving =driv_license::all();
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
     * @param  \App\driv_license  $driv_license
     * @return \Illuminate\Http\Response
     */
    public function show(driv_license $driv_license)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\driv_license  $driv_license
     * @return \Illuminate\Http\Response
     */
    public function edit(driv_license $driv_license)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\driv_license  $driv_license
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, driv_license $driv_license)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\driv_license  $driv_license
     * @return \Illuminate\Http\Response
     */
    public function destroy(driv_license $driv_license)
    {
        //
    }
}
