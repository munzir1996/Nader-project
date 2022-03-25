<?php

namespace App\Http\Controllers;

use App\passport;
use App\PassportLost;
use Illuminate\Http\Request;

class PassportLostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passport = PassportLost::all();

        return view('pro.passportLost', compact('passport'));
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
      
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'numeric',
            'personal_state' => 'string',
            'passport_no' => 'required',
        ]);

        PassportLost::create($data);

        session()->flash('Add', 'تم   إرسال الطلب بنجاح ');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PassportLost  $passportLost
     * @return \Illuminate\Http\Response
     */
    public function show(PassportLost $passportLost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PassportLost  $passportLost
     * @return \Illuminate\Http\Response
     */
    public function edit(PassportLost $passportLost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PassportLost  $passportLost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PassportLost $passportLost)
    {
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'numeric',
            'personal_state' => 'string',
            'passport_no' => 'required',
        ]);
    
        $passport = passport::where('passport_no',$request->passport_no)->first();
        //  dd($passport);
        $passport->update($data);

        $re = PassportLost::where('passport_no', $request->passport_no)->first();

        $re->update(['status' => 1]);
        session()->flash('Add', 'تم إستخراج بيانات الجواز بنجاح');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PassportLost  $passportLost
     * @return \Illuminate\Http\Response
     */
    public function destroy(PassportLost $passportLost)
    {
        //
    }
}
