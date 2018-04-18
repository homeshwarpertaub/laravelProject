<?php

namespace App\Http\Controllers\User;


use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    //
    public function send()
    {
        Mail::send(new SendMail());

    }

    public function email()
    {
        return view('applicant.email');
    }
}
