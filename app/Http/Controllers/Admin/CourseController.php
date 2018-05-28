<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\category;
use App\Model\user\course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
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
        //to view all courses
        $courses = course::all();
        return view('admin.courses.show', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create course route
        if (Auth::user()->can('courses.create')) {
            $categories = category::all();
            return view('admin.courses.course', compact('categories'));
        }
        return redirect(route('admin.home'));

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
//        return $request->all();
//              $this->validate($request,[
//                  'courseName' => 'required',
//                  'courseMode' => 'required',
//                  'courseDuration' => 'required',
//                  'categories' => 'required',
//                  'courseBody' => 'required'
//
//              ]);
//        if ($request->hasFile('image')) {
//            $request->image->store('public/image');
//        }


        $course = new course;
        $course->course_name = $request->courseName;
        $course->course_mode = $request->courseMode;
        $course->course_duration = $request->courseDuration;
        $course->slug = $request->slug;
//        $course->image= $request->image;

        $course->course_body = $request->courseBody;
        $course->save();
        $course->categories()->sync($request->categories);


        return redirect(route('course.index'));
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
        if (Auth::user()->can('courses.update')) {
            $courses = course::with('categories')->where('id', $id)->first();
            $categories = category::all();
            return view('admin.courses.edit', compact('categories', 'courses'));
        }
        return redirect(route('admin.home'));
//        return $id;
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
            if ($request->hasFile('image')) {
                $request->image->store('public/image');
            }
            $course = course::find($id);
            $course->course_name = $request->courseName;
            $course->course_mode = $request->courseMode;
            $course->course_duration = $request->courseDuration;
            $course->slug = $request->slug;
            $course->image = $request->image;
        $course->course_body = $request->courseBody;
            $course->categories()->sync($request->categories);
            $course->save();

            return redirect(route('course.index'));

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
        course::where('id', $id)->delete();
        return redirect()->back();
    }
}
