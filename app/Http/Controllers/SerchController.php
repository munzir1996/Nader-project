<?php

namespace App\Http\Controllers;

use App\serch;
use Illuminate\Http\Request;

class SerchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pro.serch');
    }
    //
    public function Serch(Request $request){

        $rdio = $request->rdio;
    
    

        
    //====================================================================
        
    // في البحث برقم الفاتورة
    
            
            $invoices = passports::select('*')->where('card_no','=',$request->card_no)->get();
            return view('pro.serch')->withDetails($passports);
            
    
        
         
        }
    //
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
     * @param  \App\serch  $serch
     * @return \Illuminate\Http\Response
     */
    public function show(serch $serch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\serch  $serch
     * @return \Illuminate\Http\Response
     */
    public function edit(serch $serch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\serch  $serch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serch $serch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\serch  $serch
     * @return \Illuminate\Http\Response
     */
    public function destroy(serch $serch)
    {
        //
    }
}
