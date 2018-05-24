<?php

namespace App\Http\Controllers\User;

use App\Model\admin\CalendarEvents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class calendarController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = CalendarEvents::all();
        return view('applicant.calendar',compact('events'));
    }
}
