<?php

namespace App\Http\Controllers;

use App\driv_licens;
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



        driv_licens::create([
                'driv_no' => $request->driv_no,
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
            session()->flash('Add', 'تم اضافة الرخصه بنجاح ');
            return back();
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
    public function update(Request $request)
    {
       
        $id = $request->driv_no;
        

        $driv_licens = driv_licens::where('driv_no',$id)->first();

        $driv_licens->update([
       
                'driv_no' => $request->driv_no,
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

        session()->flash('edit','تم تعديل الرخصه بنجاج');
        return redirect('/driving');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\driv_licens  $driv_licens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        driv_licens::find($id)->delete();
        session()->flash('delete','تم حذف الرخصه بنجاح');
        return redirect('/driving');
       
        
        
    }
}
