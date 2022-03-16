<?php

namespace App\Http\Controllers;

use App\invo;
use Illuminate\Http\Request;

class InvoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardPer =invo::all();
        return view('pro.cardper' , compact('cardPer'));
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
     * @param  \App\invo  $invo
     * @return \Illuminate\Http\Response
     */
    public function show(invo $invo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invo  $invo
     * @return \Illuminate\Http\Response
     */
    public function edit(invo $invo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invo  $invo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invo $invo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invo  $invo
     * @return \Illuminate\Http\Response
     */
    public function destroy(invo $invo)
    {
        //
    }
}
