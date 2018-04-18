<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\courseChoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\applicant;

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

    public function viewApplicants()
    {
//        $applicants = applicant::find(1)->applicants;
//        $applicants = applicant::with('courseChoice','institution')->orderBy('applicantt_id', 'ASC')->get();
//        $applicants = applicant::with('courseChoice','institution')->get();
//        $applicants = applicant::with('courseChoice','institution')->get();
        $applicants = applicant::all();
//        $coursechoice = courseChoice::all();
//        $coursee = courseChoice::with('applicant')->get();
//        $applicants = applicant::with('courseChoice')->get();
//        return view('admin.applicants', compact('applicants'));
        return view('admin.applicants',compact('applicants'));

//        $applicants = applicant::with('applicant.courseChoice')->get();
//        $applicants = applicant::all();
//        $applicants = applicant::with('courseChoice','institution')->get();
//$applicants = applicant::all();
//        $applicants = applicant::with('courseChoice','institution')->find(1);

    }

}
