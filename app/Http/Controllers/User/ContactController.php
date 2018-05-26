<?php

namespace App\Http\Controllers\User;

use App\Model\user\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        return view('applicant.contact');
    }

    public function sendContact(Request $request)
    {
//        $this->validate($request, [
////            'email' => 'required',
//            'subject' => 'min:3'
//        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = array(
            'email' => $user->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );



        Mail::send('applicant.contactEmail', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('onefortheroad02@gmail.com');
            $message->subject($data['subject']);
        });
    }
}
