@extends('admin.layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($applicants as $applicant)
                    <h4>Applicant: </h4>
                    {{ $applicant -> applicant_surname }}
                    {{ $applicant -> applicant_dob }}
                    <h4>Course Choice</h4>
                    @foreach($applicant->courseChoice  as $courseChoice)

                        {{ $courseChoice -> title1 }}
                        @foreach($applicant->institution as $institution)
                            {{ $institution-> inst_name1 }}

                            <p>
                                {{--{{dump($applicantt)}}--}}
                            </p>
                            <br>

                        @endforeach
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>



@endsection