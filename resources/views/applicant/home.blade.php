@extends('applicant/app')
@section('title','Home Page - My University')
@section('activehome','active')
@section('main-content')
    <!--Carousel Wrapper-->
    <div id="video-carousel-example2" style="margin-bottom: 20px;" class="carousel slide carousel-fade"
         data-ride="carousel">

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <!--Mask color-->
                <div class="view hm-black-light">

                    <!--Video source-->
                    <video class="video-full" autoplay loop>
                        <source src="{{ asset('video/Type.mp4') }}" type="video/mp4"/>
                    </video>
                    <div class="full-bg-img"></div>
                </div>

                <!--Caption-->
                <div class="carousel-caption">
                    <div class="flex-center animated fadeIn">
                        <ul>
                            @guest
                                <li>
                                    <h1 class="h1-responsive">Welcome to My University</h1></li>
                                <li>

                            @else
                                <li>
                                    <h1 class="h1-responsive">Welcome {{ ucfirst(Auth::user()->name) }} to My
                                        University</h1></li>
                                <li>
                                    @endguest
                                    <p>The most promising institution for you to make your career</p>
                                </li>
                                <li>
                                    @guest
                                        <a target="_blank" href="{{ route('register') }}"
                                           class="btn btn-outline-cyan btn-lg"
                                           rel="nofollow">Sign up!</a>
                                    @else
                                        <a href="#" class="btn btn-outline-cyan btn-lg"
                                           rel="nofollow">Visit Us!</a>
                                    @endguest

                                    <a target="_blank" href="{{ route('applicant.about') }}"
                                       class="btn btn-outline-light-green btn-lg" rel="nofollow">Learn more</a>
                                </li>
                        </ul>
                    </div>
                </div>
                <!--Caption-->
            </div>
            <!--/First slide-->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <!-- Card -->
                <!-- Card -->
                <div class="card animated flipInY">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="{{asset('img/MU_Courses.jpeg')}}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Courses Available</h4>
                        <!-- Text -->
                        <p class="card-text">Our A to Z Courses Directory for Undergraduate Courses. We offer one of the
                            widest ranges of qualifications, courses and modules in most subjects of study.</p>
                        <!-- Button -->
                        <a href="{{ route('applicant.viewCourses') }}" class="btn btn-outline-primary">View More</a>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Card -->
                <!-- Card -->
                <div class="card animated flipInY">

                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top"
                             src="{{ asset('img/applyonline.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Apply Online Now</h4>
                    {{--@guest--}}
                    {{--@else--}}
                    {{--<a href="{{ route('update.edit',Auth::user()->id) }}">Edit </a>--}}
                    {{--@endguest--}}

                    <!-- Text -->
                        <p class="card-text">Start Your Online Application Now! All applications will be reviewed
                            thoroughly and equally in the admissions process regardless of application tool.</p>
                        <!-- Button -->
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Apply</a>
                        @else
                            <a href="{{ route('apply.index') }}" class="btn btn-outline-primary">Apply</a>
                        @endguest
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- Card -->
                <!-- Card -->
                <div class="card animated flipInY">

                    <div class="view overlay">
                        <img class="card-img-top"
                             src="{{ asset('img/faqs.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">Need Help?</h4>
                        <!-- Text -->
                        <p class="card-text">Facing any difficulty or you have any query? Some frequently asked
                            questions and/or guide to assist you in making your online application a smooth process</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-outline-primary">View FAQs</a>

                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
            </div>
        </div>
    </div>

@endsection