<?php

namespace App\Http\Controllers\User;

use App\Model\user\course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //viewCourse
    public function index()
    {
        $courses = course::all();
        return view('applicant.allCourses', compact('courses'));
    }

    //get the course via the slug from dbse
    public function course(course $course)
    {
        //slug $slug should be same
        return view('applicant.courses', compact('course'));
    }

    public function courseDetails(Request $request, $id)
    {
        $courseDetails = course::find($id);
        return view('applicant.courseDetails',compact('courseDetails'));
    }

    public function search(Request $request)
    {
        $term = $request->term;
        $courses = course::where('course_name', 'LIKE', '%' . $term . '%')->get();
        if (count($courses) == 0) {
            $searchResult[] = 'No item found';
        } else {
            foreach ($courses as $key => $value) {
                $searchResult[] = $value->course_name;
            }
        }
//        return $searchResult;
        return view('applicant.viewCourses', compact('courses'));



    }


}
