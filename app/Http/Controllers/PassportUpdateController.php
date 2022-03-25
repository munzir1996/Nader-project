<?php

namespace App\Http\Controllers;

use App\passport;
use App\RequestPassport;
use Illuminate\Http\Request;

class PassportUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passport = RequestPassport::all();

        return view('pro.passportUpdate', compact('passport'));
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
            'phone' => 'numeric',
            'personal_state' => 'string',
            'passport_no' => 'required',
        ]);

        RequestPassport::create($data);

        session()->flash('Add', 'تم   إرسال الطلب بنجاح ');

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
        // dd($request->all());
       
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

        $re = RequestPassport::where('passport_no', $request->passport_no)->first();

        $re->update(['status' => 1]);
        session()->flash('Add', 'تم تعديل بيانات الجواز بنجاح');

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
