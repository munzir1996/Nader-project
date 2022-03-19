<?php

namespace App\Http\Controllers;

use App\passport;
use Illuminate\Http\Request;

class PassportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passport = passport::all();
        return view('pro.passport', compact('passport'));
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
        $validatedData = $request->validate([
            'passport_no' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'adress' => 'required',
            'blood_type' => 'required',
            'ns_no' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'date_begin' => 'required',
            'date_end' => 'required',
            'job' => 'required',
            'personal_state' => 'required',
        ]);

        passport::create([
            'passport_no' => $request->passport_no,
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
     * @param  \App\passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function show(passport $passport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function edit(passport $passport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {



        $id = $request->id;


        $passport = passport::find($id);
        $passport->update([

            'passport_no' => $request->passport_no,
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

        session()->flash('edit', 'تم تعديل  الجواز بنجاج');
        return  back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\passport  $passport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        passport::find($id)->delete();
        session()->flash('delete', 'تم حذف الجواز بنجاح');
        return back();
    }
}
