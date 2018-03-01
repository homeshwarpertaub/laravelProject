@extends('applicant/app')
@section('title','HomePage')
@section('main-content')
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
        <li data-target="#video-carousel-example2" data-slide-to="1"></li>
        <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <!--Mask color-->
            <div class="view hm-black-light">

                <!--Video source-->
                <video class="video-full" autoplay loop>
                    <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                </video>
                <div class="full-bg-img"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="flex-center animated fadeIn">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">Material Design for Bootstrap 4</h1></li>
                        <li>
                            <p>The most powerful and free UI KIT for Bootstrap</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg" rel="nofollow">Sign up!</a>
                            <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg" rel="nofollow">Learn more</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-blue-slight">
                <!--Video source-->
                <video class="video-full" autoplay loop>
                    <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
                </video>
                <div class="mask"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="flex-center animated fadeInDown">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">Lots of tutorials at your disposal</h1>
                        </li>
                        <li>
                            <p>And all of them are FREE!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-primary btn-lg" rel="nofollow">Start learning</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.Caption-->
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-light">
                <!--Video source-->
                <video class="video-full" autoplay loop>
                    <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                </video>
                <div class="mask"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="flex-center animated fadeInDown">
                    <ul>
                        <li>
                            <h1 class="h1-responsive">Visit our support forum</h1></li>
                        <li>
                            <p>Our community can help you with any question</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Support forum</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/.Caption-->
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<!--/.Main layout-->
@endsection