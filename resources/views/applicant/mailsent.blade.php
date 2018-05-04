@extends('applicant/app')
@section('title','Application Received - My University')
@section('activeapply','active')
@section('main-content')
    <div class="container">
        <div class="row" style="margin-top:15px !important;">
                <div class="col-md-12 text-center">
                    <div class="jumbotron">

                    <h2>Application form submitted</h2>
                    <p>An email has been sent to your account to acknowledge the receipt of your application. Please
                        verify your inbox and Contact us if you have any query</p>
                    <button class="btn btn-default" onclick="location.href='{{route('applicant.home')}}'">Finish
                    </button>
                </div>
            </div>
        </div>
    </div>


@endsection