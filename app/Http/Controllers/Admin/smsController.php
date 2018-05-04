<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class smsController extends Controller
{
    //

    /**
     *Create a new controller instance
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $user = User::all();
        return view('admin.sms', ['user' => $user]);
    }

    public function message(Request $request)
    {
        $message = $request->input('message');
        $mobile = $request->input('mobile');
        $encodeMessage = urlencode($message);
        $authkey = "dmluYXk5OTU1OmhvbWVzaDk5NTU=";
//        $authkey ="vinay9955:homesh9955";
        $senderId = 'KUZ8RD';
        $route = 2;
        $postData = $request->all();

        $mobileNumber = implode('', $postData['mobile']);

        $arr = str_split($mobileNumber, '11');
        $mobiles = implode(",", $arr);
//                var_dump($mobiles);exit();

        $data = array(
            'authkey' => $authkey,
            'mobiles' => $mobiles,
            'message' => $encodeMessage,
            'sender' => $senderId,
            'route' => $route,
        );
        $url = "https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0";

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data
        ));



        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec( $ch );

        if (curl_errno($ch)) {
            echo 'error: ' . curl_error($ch);
        }
        curl_close($ch);

        return redirect(route('sms'));

    }

}
