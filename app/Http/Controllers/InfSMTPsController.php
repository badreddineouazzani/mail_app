<?php

namespace App\Http\Controllers;

use App\Models\inf_SMTPs;
use Illuminate\Http\Request;

class InfSMTPsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        setEnv('ADMIN_APP','BADR');
        $data=env('ADMIN_APP');
         return back()->withErrors(['msg' => env('ADMIN_APP')]); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inf_SMTPs  $inf_SMTPs
     * @return \Illuminate\Http\Response
     */
    public function show(inf_SMTPs $inf_SMTPs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inf_SMTPs  $inf_SMTPs
     * @return \Illuminate\Http\Response
     */
    public function edit(inf_SMTPs $inf_SMTPs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inf_SMTPs  $inf_SMTPs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inf_SMTPs $inf_SMTPs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inf_SMTPs  $inf_SMTPs
     * @return \Illuminate\Http\Response
     */
    public function destroy(inf_SMTPs $inf_SMTPs)
    {
        //
    }
}
