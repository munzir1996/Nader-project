<?php

namespace App\Http\Controllers;

use App\driv_licens;
use App\DriverLost;
use Illuminate\Http\Request;

class DriverLostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dirver = DriverLost::all();

        return view('pro.driverLost', compact('dirver'));
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
    //   dd($request->all());
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => '    numeric',
            'personal_state' => 'string',
            'driv_no' => 'required',
        ]);

   

        DriverLost::create($data);

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
     

        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'numeric',
            'personal_state' => 'string',
            'driv_no' => 'required',
        ]);
        $dirver = driv_licens::find($request->id);

        $re = DriverLost::where('driv_no', $request->driv_no)->first();

        $re->update(['status' => 1]);

        $dirver->update($data);

        session()->flash('Add', 'تم إستخراج بيانات الرخصة بنجاح');

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
