@extends('applicant/app')
@section('title','Course Details - My University')
@section('activecourses','active')
@section('main-content')

    <div class="container">
        <div class="row" style="margin-top:20px !important;">
            <div class="col-md-12">
                {!! $courseDetails->course_body !!}

            </div>
        </div>
    </div>






@endsection
