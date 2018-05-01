<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\applicant;
use App\Model\user\courseChoice;
use App\Model\user\employment;
use App\Model\user\institution;
use App\Model\user\otherQualification;
use App\Model\user\Payment;
use App\Model\user\scUpload;
use App\Model\user\hscUpload;
use App\Model\user\Delivery;
use App\Model\user\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{

    /**
     *Create a new controller instance
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applicants = applicant::all();
        return view('admin.applicants.applicants', compact('applicants'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
//        $payment = Payment::find($payment->id);
        $applicants = applicant::find($id);

        return view('admin.applicants.edit', compact('applicants'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $applicants = applicant::find($id);
        $payment = Payment::where('applicant_id', $applicants->id)->first();
        $payment->payment_status = $request->paymentStatus;
        $applicants->Payment()->save($payment);

        $delivery = Delivery::where('applicant_id', $applicants->id)->first();
        $delivery->deliveries_status = $request->status;
        $applicants->Delivery()->save($delivery);

        $result = Result::where('applicant_id', $applicants->id)->first();
        $result->result_status = $request->result_status;
        $result->result_comments = $request->result_comments;
        $applicants->Result()->save($result);


        return redirect(route('admin-applicants.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
