@extends('applicant/app')
@section('title','Search Courses - My University')
@section('activecourses','active')
@section('main-content')
    <main class="text-center">
        <div class="container">
            <div class="row">
                @foreach($courses as $course)
                @endforeach
                <div id="app">
                    <ais-index app-id="HHW6MVU11R"
                               api-key="1a3d58b1aa75dc49ab6dbc8a5a6c030a"
                               index-name="courses">
                        <form action="" class="form-inline"></form>
                        <ais-search-box>
                            <div class="input-group">
                                <ais-input
                                        placeholder="Search product by name or reference..."
                                        :class-names="{
                'ais-input': 'form-control'
                }"
                                ></ais-input>

                                <span class="input-group-btn"><button class="btn btn-default" type="submit">
                  <span class="fa fa-search" aria-hidden="true"></span>
                </button>
              </span>
                            </div><!-- /input-group -->

                        </ais-search-box>
                        <ais-results class="row">
                            <template scope="{ result }">

                                <div class="col-md-4">
                                    <div class="card">
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title"> @{{ result.course_name }}</h4>
                                            <!--Text-->
                                            {{--show created at time--}}
                                            <p class="card-text"> @{{ result.course_mode }}</p>
                                            {{--categories--}}
                                            <p>
                                                <small class="left">Created
                                                    at {{ $course->created_at->diffForHumans() }}
                                                    @foreach ($course->categories as $category)
                                                        <small class="right">
                                                            <a href="{{ route('category',$category->slug) }}">{{$category->category_name}}</a>
                                                        </small>
                                                </small>

                                                @endforeach</p>
                                        </div>

                                    </div>
                                </div>
                            </template>
                        </ais-results>



                        <ais-powered-by></ais-powered-by>

                    </ais-index>
                </div>
            </div>
            </div>
    </main>

@endsection
