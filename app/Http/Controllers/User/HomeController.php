<?php

namespace App\Http\Controllers\User;

use App\Model\user\category;
use App\Model\user\course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('applicant.home');

    }

    public function category(category $category)
    {
        //make courses as function not object
        $courses = $category->courses();
        return view('applicant.courses', compact('category'));
    }
}
