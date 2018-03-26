<?php

namespace App\Http\Controllers;

use App\phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = phone::latest()->get();
        return view('listphone', compact('phones'));
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
        $input = $request->all();

        $phone = new phone;

        $phone['Brand'] = $input['Brand'];
        $phone['Model'] = $input['Model'];
        $phone['Storage'] = $input['Storage'];
        $phone['Warranty'] = $input['Warranty'];
        $phone['Color'] = $input['Color'];
        $phone['Year'] = $input['Year'];
        $phone['Price'] = $input['Price'];
        $phone['Picture1'] = null;
        $phone['Picture2'] = null;
        $phone['Picture3'] = null;
        $phone['Picture4'] = null;
        $phone['Picture5'] = null;

        $phone->save();


        return view('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(phone $phone)
    {
        //
    }
}
