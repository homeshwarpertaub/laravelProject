@extends('applicant/app')
@section('title','Courses - My University')
@section('activecourses','active')
@section('main-content')
<main class="text-center">
    <div class="container">
        <a href="{{route('applicant.viewCourses')}}" class="btn btn-outline-elegant"> Search Here <i class="fa fa-search" aria-hidden="true"></i></a>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4">
                    <div class="card">
                        <div class="view overlay hm-white-slight">
                            <img src="{{ Storage::disk('local')->url($course->image) }}"
                                 class="img-fluid" alt="">
                            <div class="mask"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"> {{ $course->course_name }}</h4>
                            <!--Text-->
                            {{--show created at time--}}
                            <p class="card-text"> {{ $course->course_mode }}</p>
                            <p>
                                <small class="left">Created
                                    at {{ $course->created_at->diffForHumans() }}
                                    @foreach ($course->categories as $category)
                                        <small class="right">
                                            <p>{{$category->category_name}}</p>
                                        </small>
                                </small>
                                <a href="{{ route('applicant.courseDetails', $course->id) }}"
                                   class="btn btn-primary">Learn More</a>
                                @endforeach</p>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
</main>

@endsection
