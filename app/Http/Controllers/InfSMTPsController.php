<?php

namespace App\Http\Controllers;

use App\Models\inf_SMTPs;
use Illuminate\Http\Request;
use Config;
use Mail;

class InfSMTPsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Config::set('mail.port', 55);
        $path='mail.mailers.smtp';
        $configSmtp=[
            'host' => 'sss',
            'port' => '',
            'encryption' => 'tls',
            'username' => '',
            'password' => ''
        ];
        $configSmtp['host']='smtp.mailtrap.io';
        $configSmtp['port']=2525;
        $configSmtp['username']=$request->sender;
        $configSmtp['password']=$request->passwd;


       
        Config::set(
            [
                $path.'.host'=> $configSmtp['host'],
                $path.'.port'=> $configSmtp['port'],
                $path.'.username'=> '801177a509e30b',
                $path.'.password'=> '122ca0395d8581'
    
            ]);

        $data = $request->sender;
      $body=$request->bodyEmail;
        

        Mail::send([], [
            'emailS'=> $request->sender
        ], function ($message) use ($data,$body) {
            $message->from($data, 'Laravel');
            $message->to($data)->subject('this is the test')
            ->setBody($body, 'text/html');
                });
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
