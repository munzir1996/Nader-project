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
        $passport =passport::all();
        return view('pro.passport' , compact('passport'));
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
        // $validatedData = $request->validate([
        //     'passport_no' => 'required|unique:passport_no|max:255',
        //     'name' => 'required|unique:name|max:255',
        //     'birthday' => 'required|unique:birthday|max:255',
        //     'adress' => 'required|unique:adress|max:255',
        //     'blood_type' => 'required|unique:blood_type|max:255',
        //     'ns_no' => 'required|unique:ns_no|max:255',
        //     'phone' => 'required|unique:phone|max:255',
        //     'gender' => 'required|unique:gender|max:255',
        //     'date_begin' => 'required|unique:date_begin|max:255',
        //     'date_end' => 'required|unique:date_end|max:255',
        //     'job' => 'required|unique:job|max:255',
        //     'personal_state' => 'required|unique:personal_state|max:255',
        // ],[

        //     'date_begin.required' =>'يرجي ادخال اسم القسم',
        //     'date_end.unique' =>'اسم القسم مسجل مسبقا',
        //     'birthday.unique' =>'اسم القسم مسجل مسبقا',

        // ]);

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
            return redirect('/passport');
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

        session()->flash('edit','تم تعديل القسم بنجاج');
        return redirect('/passport');
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
        session()->flash('delete','تم حذف القسم بنجاح');
        return redirect('/passport');
       
        
        
    }
}
