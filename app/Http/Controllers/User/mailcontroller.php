<?php

namespace App\Http\Controllers\User;


use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class mailcontroller extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function send()
    {
        Mail::send(new SendMail());
        return view('applicant.mailsent');

    }

    public function email()
    {
        return view('applicant.email');
    }
}
