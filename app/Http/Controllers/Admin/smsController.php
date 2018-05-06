<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class smsController extends Controller
{
//    private $SMS_SENDER = "902116";
    private $SMS_USERNAME = 'vinay9955';
    private $SMS_PASSWORD = 'homesh9955';

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



    public function getUserNumber(Request $request)
    {
        $message = $request->input('message');
        $mobile = $request->input('mobile');
//        $encodeMessage = urlencode($message);

        $postData = $request->all();

        $mobileNumber = implode('', $postData['mobile']);

        $arr = str_split($mobileNumber, '11');

        $mobiles = implode(",", $arr);
//        print_r($mobiles);exit();

//                var_dump($mobiles);exit();
        $this->initiateSmsActivation($mobiles, $message);

        return redirect()->back();
    }

    public function initiateSmsActivation($mobiles, $message)
    {
        $isError = 0;
        $errorMessage = true;

        $postData = array(
            'username' => $this->SMS_USERNAME,
            'password' => $this->SMS_PASSWORD,
            'message' => $message,
//            'sender' => $this->SMS_SENDER,
            'mobiles' => $mobiles,
        );

//        $url = "https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0/";
        $url ="https://bulksms.vsms.net/eapi";

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $postData
        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            print_r(json_decode($output));
        }

        if ($isError) {
            return array('error' => 1, 'message' => $errorMessage);
        } else {
            return array('error' => 0);
        }

    }

    public function message(Request $request)
    {

//        $authkey = "C1D5E4DEC26B45DDBD12BB417D9A1B46-02-3:yuIutVhUH4fG7Hk43gtwD854mUsjC=";
//        $senderId = 'KUZ8RD';
//        $route = 4;

//
//        $data = array(
//            'authkey' => $authkey,
//            'mobiles' => $mobiles,
//            'message' => $encodeMessage,
//            'sender' => $senderId,
//            'route' => $route,
//        );
//        $url = "https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0";
//
//        $ch = curl_init();
//        curl_setopt_array($ch, array(
//            CURLOPT_URL => $url,
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_POST => true,
//            CURLOPT_POSTFIELDS => $data
//        ));


//        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//        $output = curl_exec($ch);
//
//        if (curl_errno($ch)) {
//            echo 'error: ' . curl_error($ch);
//        }
//        curl_close($ch);
//
//        return redirect(route('sms'));

    }

}
