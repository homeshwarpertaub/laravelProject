@extends('applicant/app')
@section('title','Contact Us - My University')
@section('activecontact','active')
@section('main-content')

    <div class="" style="background-image: url({{asset('user/img/university.jpg')}})">

        <div class="container example z-depth-5">
            <div class="row justify-content-md-center">
                <div class="jumbotron col-md-12">

                        <!-- Material form register -->
                        <form action="{{route('contactEmail')}}" method="POST" class="form form-horizontal">
                            {{csrf_field()}}
                            <h1 class="h1 main-title text-center h1-responsive">Write To Us</h1>

                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name">Your name</label>
                            </div>

                            {{--<!-- Material input email -->--}}
                            {{--<div class="md-form">--}}
                                {{--<i class="fa fa-envelope prefix grey-text"></i>--}}
                                {{--<input type="email" id="email" name="email" class="form-control">--}}
                                {{--<label for="email">Your email</label>--}}
                            {{--</div>--}}

                            <!-- Material input email -->
                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject">Subject</label>
                            </div>

                            <!-- Material input password -->
                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea type="text" id="message" name="message" class="form-control md-textarea"
                                          rows="3"></textarea>
                                <label for="message">Your message</label>
                            </div>

                            <div class="text-center mt-4">
                                <button class="btn btn-outline-secondary" type="submit">Send<i
                                            class="fa fa-paper-plane-o ml-2"></i></button>
                            </div>
                        </form>
                        <!-- Material form register -->

            </div>
        </div>
    </div>
    </div>


@endsection