<?php

namespace App\Http\Controllers;

use App\invo;
use App\RequestCard;
use Illuminate\Http\Request;

class CardUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cardPer = RequestCard::all();

        return view('pro.cardUpdate', compact('cardPer'));
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
        // dd($request->all());
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'string',
            'personal_state' => 'string',
        ]);

     

        RequestCard::create($data);

        session()->flash('success', 'تم  إرسال الطلب بنجاح ');

        return back();
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
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'numeric',
            'personal_state' => 'string',
        ]);
        $card = invo::find($request->id);

        $card->update($data);

        session()->flash('success', 'تم تعديل بيانات البطاقه بنجاح');

        return back();
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
