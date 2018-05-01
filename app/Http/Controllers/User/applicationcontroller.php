<?php

namespace App\Http\Controllers\User;

use App\Model\user\applicant;
use App\Model\user\courseChoice;
use App\Model\user\Delivery;
use App\Model\user\employment;
use App\Model\user\institution;
use App\Model\user\otherQualification;
use App\Model\user\Payment;
use App\Model\user\Result;
use App\Model\user\scUpload;
use App\Model\user\hscUpload;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Model\user\User;

use Eloquent;
use Illuminate\Support\Facades\Auth;

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
//        $applicant_id = \Auth::user()->id;

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
        $app->applicant_IDproof = $request->uploadNationality->getClientOriginalName();
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
        $app->save();

        //course choices made
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
        $choice->applicant_id = $app->id;
        $choice->save();

        //institutions went
        $inst = new institution;
        $inst->inst_name1 = $request->institution1;
        $inst->entered1 = $request->entered1;
        $inst->left1 = $request->left1;
        $inst->inst_name2 = $request->institution2;
        $inst->entered2 = $request->entered2;
        $inst->left2 = $request->left2;
        $inst->applicant_id = $app->id;
        $inst->save();

        //  upload School certificates
        $files = $request->file('scAttachment');
        if ($files[0] != '') {
            foreach ($files as $file) {
                $uploadSave = new ScUpload();
                $fileName = $file->getClientOriginalName();
                $fileSize = $file->getSize();
                $uploadSave->name = $fileName;
                $uploadSave->size = $fileSize;
                $uploadSave->applicant_id = $app->id;
                $uploadSave->save();
            }
        }

        //hsc upload results
        $hscFiles = $request->file('hscAttachment');
        if ($hscFiles[0] != '') {
            foreach ($hscFiles as $hscFile) {
                $hscSave = new hscUpload();
                $hscFileName = $hscFile->getClientOriginalName();
                $hscFileSize = $hscFile->getSize();
                $hscSave->name = $hscFileName;
                $hscSave->size = $hscFileSize;
                $hscSave->applicant_id = $app->id;

                $hscSave->save();
            }
        }

        $other = new otherQualification();
        $other->other_course1 = $request->otherCourse1;
        $other->other_inst1 = $request->otherInsti1;
        $other->other_grade1 = $request->othergrade1;
        $other->from1 = $request->from1;
        $other->to1 = $request->to1;
        $other->other_course2 = $request->otherCourse2;
        $other->other_inst2 = $request->otherInsti2;
        $other->other_grade2 = $request->othergrade2;
        $other->from2 = $request->from2;
        $other->to2 = $request->to2;
        $other->applicant_id = $app->id;
        $other->save();

        $employment = new employment();
        $employment->job_name1 = $request->jobName1;
        $employment->job_address1 = $request->jobAddress1;
        $employment->job_position1 = $request->jobPosition1;
        $employment->job_description1 = $request->jobDescription1;
        $employment->job_from1 = $request->jobFromDate1;
        $employment->job_to1 = $request->jobToDate1;
        $employment->job_name2 = $request->jobName2;
        $employment->job_address2 = $request->jobAddress2;
        $employment->job_position2 = $request->jobPosition2;
        $employment->job_description2 = $request->jobDescription2;
        $employment->job_from2 = $request->jobFromDate2;
        $employment->job_to2 = $request->jobToDate2;
        $employment->applicant_id = $app->id;
        $employment->save();

        $payment = new Payment();
        $payment->payment_status = 'Unpaid';
        $payment->type = 'cash';
        $payment->applicant_id = $app->id;
        $payment->save();

        $delivery = new Delivery();
        $delivery->deliveries_status = "New Application";
//        $delivery->comments = '';
        $delivery->applicant_id = $app->id;
        $delivery->save();

        $result = new Result();
        $result->result_status = 'Unchecked';
//        $result->result_comments = '';
        $result->applicant_id = $app->id;
        $result->save();



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
