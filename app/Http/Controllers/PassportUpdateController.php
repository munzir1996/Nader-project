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
        //
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
            'phone' => 'numaric',
            'personal_state' => 'string',
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
        $data = $request->validate([
            'job' => 'string',
            'adress' => 'string',
            'phone' => 'numaric',
            'personal_state' => 'string',
        ]);
        $dirver = passport::find($request->id);

        $dirver->update($data);

        session()->flash('Add', 'تم تعديل بيانات الرخصة بنجاح');

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
