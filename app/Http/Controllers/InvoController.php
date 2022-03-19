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
        $cardPer = invo::all();
        return view('pro.cardPer', compact('cardPer'));
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

        invo::create([
            'card_no' => $request->card_no,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'adress' => $request->adress,
            'blood_type' => $request->blood_type,
            'ns_no' => $request->ns_no,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_begin' => $request->date_begin,
            'date_end' => $request->date_end,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        session()->flash('Add', 'تم اضافة القسم بنجاح ');

        return back();
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
    public function update(Request $request)
    {
// dd($request->all());
        $id = $request->id;

        $invo = invo::find($id);

        $invo->update([
            'card_no' => $request->card_no,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'adress' => $request->adress,
            'blood_type' => $request->blood_type,
            'ns_no' => $request->ns_no,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_begin' => $request->date_begin,
            'date_end' => $request->date_end,
            'job' => $request->job,
            'personal_state' => $request->personal_state,
        ]);

        session()->flash('edit', 'تم تعديل البطاقه بنجاج');
        
        return redirect('/cardPer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invo  $invo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        invo::find($id)->delete();
        session()->flash('delete', 'تم حذف البطاقه بنجاح');
        return redirect('/cardPer');
    }
}
