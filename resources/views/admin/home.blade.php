@extends('admin.layouts.app')
@section('title','Admin Home')
@section('activeadminhome','active')


@section('main-content')
    <div class="container-fluid">

        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="white-box">
                    <div class="weather-box">
                        <div class="weather-top">
                            <h2 class="pull-left text-purple">{{ \Carbon\Carbon::now() }} <br>
                            </h2>
                            <div class="today_crnt pull-right">
                                <canvas class="sleet" width="44" height="44"></canvas>
                                <span class="text-purple">32<sup>°F</sup></span></div>
                        </div>
                        <div class="weather-info">
                            <h5 class="font-bold">Weather info</h5>
                            <div class="row">
                                <div class="col-xs-6 p-r-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pull-left">Wind</p>
                                            <p class="pull-right font-bold">16km/h</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pull-left">Sunrise</p>
                                            <p class="pull-right font-bold">05:20</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pull-left">Humanfeel</p>
                                            <p class="pull-right font-bold">32 <sup>°F</sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 p-l-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pull-left">Sunset</p>
                                            <p class="pull-right font-bold">21:05</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="pull-left">Pressure </p>
                                            <p class="pull-right font-bold">22 in</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="weather-time">
                            <ul class="list-unstyled weather-days row">
                                <li class="col-xs-4 col-sm-2"><span>Tue</span>
                                    <canvas class="sleet" width="30" height="30"></canvas>
                                    <span>32<sup>°F</sup></span></li>
                                <li class="col-xs-4 col-sm-2"><span>Wed</span>
                                    <canvas class="clear-day" width="30" height="30"></canvas>
                                    <span>34<sup>°F</sup></span></li>
                                <li class="col-xs-4 col-sm-2"><span>Thu</span>
                                    <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                    <span>35<sup>°F</sup></span></li>
                                <li class="col-xs-4 col-sm-2"><span>Fri</span>
                                    <canvas class="cloudy" width="30" height="30"></canvas>
                                    <span>34<sup>°F</sup></span></li>
                                <li class="col-xs-4 col-sm-2"><span>Sat</span>
                                    <canvas class="snow" width="30" height="30"></canvas>
                                    <span>30<sup>°F</sup></span></li>
                                <li class="col-xs-4 col-sm-2"><span>Sun</span>
                                    <canvas class="wind" width="30" height="30"></canvas>
                                    <span>26<sup>°F</sup></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="white-box">
                    <div class="row row-in">
                        <div class="col-lg-4 col-sm-6 row-in-br">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"><i data-icon="E"
                                                                           class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">APPLICATIONS</h5></div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger">{{ \App\Model\user\applicant::count() }}</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ \App\Model\user\applicant::count() }}%"><span
                                                    class="sr-only">{{ \App\Model\user\applicant::count() }}% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 row-in-br  b-r-none">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                           data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">COURSES</h5></div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna">{{ \App\Model\user\course::count() }}</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ \App\Model\user\course::count() }}%"><span
                                                    class="sr-only">{{ \App\Model\user\course::count() }}% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6  b-0">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"><i class="linea-icon linea-basic"
                                                                           data-icon="&#xe016;"></i>
                                    <h5 class="text-muted vb">ALL USERS</h5></div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-success">{{ \App\Model\user\User::count() }}</h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{ \App\Model\user\User::count() }}%"><span
                                                    class="sr-only">{{ \App\Model\user\User::count() }}% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
@endsection
@section('footerSection')


    <script src="{{asset('admin/js/dashboard1.js')}}"></script>





@endsection

