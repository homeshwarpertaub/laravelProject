<?php

namespace App\Http\Controllers\User;

use App\Model\user\applicant;
use App\Model\user\courseChoice;
use App\Model\user\institution;
use App\Model\user\otherQualification;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Eloquent;

class applicationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('applicant.applyForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
/* $this->validate($request, [
            'receipt_date' => 'date|required',
            'return_date' => 'date|required',
            'user_name' => 'required',
            'user_phone' => 'required',
            'work_sum' => 'integer|required',
            'user_descr' => 'required',
            'foruser_descr' => 'required'
        ]);*/



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
//        dd($request->all());
//insert course choices made
        $applicant_id = '1';
        $choice = new courseChoice;
        $choice->title1 = $request->title1;
        $choice->duration1 = $request->choiceDuration1;
        $choice->code1 = $request->code1;

        $choice->title2 = $request->title2;
        $choice->duration2 = $request->choiceDuration2;
        $choice->code2 = $request->code2;

        $choice->title3 = $request->title3;
        $choice->duration3 = $request->choiceDuration3;
        $choice->code3 = $request->code3;
        $choice->applicant_id = $applicant_id;
        $choice->save();

//insert applicant details
        $app = new applicant;
        $app->applicant_surname = $request->profileSurname;
        $app->applicant_otherName = $request->profileOthername;
        $app->applicant_maidenName = $request->maidenName;
        $app->applicant_dob = $request->profileDate;
        $app->applicant_sex = $request->sex;
        $app->applicant_status = $request->status;
        $app->applicant_nationality = $request->nationality;
        $app->applicant_Pid = $request->pid;
        $app->applicant_Pid = $request->pid;
        $app->applicant_notMauritian = $request->notMauritian;
        $app->applicant_address = $request->profileAddress;
        $app->applicant_home = $request->profileHome;
        $app->applicant_office = $request->profileOffice;
        $app->applicant_mobile = $request->profileMobile;
        $app->applicant_fax = $request->profileFax;
        $app->applicant_email = $request->profileEmail;
        $app->applicant_parentName = $request->parentName;
        $app->applicant_parentAddress = $request->parentAddress;
        $app->applicant_parentHome = $request->parentHome;
        $app->applicant_parentOffice = $request->parentOffice;
        $app->applicant_referee1Name = $request->refereeName;
        $app->applicant_referee1Occupation = $request->refereeOccupation;
        $app->applicant_referee1Address = $request->refereeAddress;
        $app->applicant_referee1Phone = $request->refereePhone;
        $app->applicant_referee2Name = $request->refereeName2;
        $app->applicant_referee2Occupation = $request->refereeOccupation2;
        $app->applicant_referee2Address = $request->refereeAddress2;
        $app->applicant_referee2Phone = $request->refereePhone2;
        $app->applicant_careerChoice = $request->careerChoice;
        $app->applicant_profilePhoto = $request->profilePhoto;
        $app->applicant_id = $applicant_id;
        $app->save();




//        Eloquent::unguard();
//        $user_id = '1';
//        $other = new otherQualification([
//            'other_course' => $request->input('othercourse1'),
//            'other_inst' => $request->input('otherInsti1'),
//            'other_grade' => $request->input('othergrade1'),
//            'other_duration' => $request->input('instDuration1'),
//            'other_from' => $request->input('from1'),
//            'other_to' => $request->input('to1'),
//            'applicant_id' => $user_id
//        ]);
//        dd($other);
//$other->save();


//  not working for now

//        $allqualifications = array();
////        $user_id = '1';
////        $input = $request->all();
//        foreach ($input as $key => $input) {
//            $qualification = new otherQualification();
//            $qualification->other_course = $request['othercourse1'][$key];
//            $qualification->other_inst = $request['otherInsti1'][$key];
//            $qualification->other_grade = $request['othergrade1'][$key];
//            $qualification->other_duration = $request['instDuration1'][$key];
//            $qualification->other_from = $request['from1'][$key];
//            $qualification->other_to = $request['to1'][$key];
//            $qualification->applicant_id = $user_id[$key];
//            dd($allqualifications);
//        $qualifications->save();

        return redirect(route('apply.index'));

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