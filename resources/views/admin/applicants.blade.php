@extends('admin.layouts.app')
@section('headSection')


@endsection


@section('main-content')
    <div class="container">
        <div class="row m-t-10">

            <div class="col-md-8">
                @foreach($applicants as $applicant)

                <div class="panel panel-inverse">
                    <div class="panel-heading">{{ $applicant -> id }}
                        <div class="panel-action">
                            <div class="dropdown">
                                <a href="#" aria-expanded="false" data-toggle="dropdown" role="button"
                                   class="dropdown-toggle" id="panelDropdown">Options <span class="caret"></span></a>
                                <ul class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="panelDropdown"
                                    role="menu">
                                    <li role="presentation"><a href="#" role="menuitem">View PDF</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-wrapper collapse in" aria-expanded="true">
                        <div class="panel-body">
                                <div class="white-box">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Surname</th>
                                                <th>Other Name</th>
                                                <th>Sex</th>
                                                <th>Nationality</th>
                                                <th>Email</th>
                                                <th>Photo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{ $applicant -> applicant_surname }}
                                                </td>
                                                <td>{{ $applicant -> applicant_otherName }}</td>
                                                <td>{{ $applicant -> applicant_sex }}</td>
                                                <td>{{ $applicant -> applicant_nationality }}</td>
                                                <td>{{ $applicant -> applicant_email }}</td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @foreach($applicant->courseChoice  as $courseChoice)
                                        <h3 class="box-title">
                                            <ol>
                                                <li>{{ $courseChoice -> title1 }}
                                                </li>
                                                <li>{{ $courseChoice -> title2 }}</li>
                                                <li>{{ $courseChoice -> title3 }}</li>
                                            </ol>
                                        </h3>
                                </div>

                                {{--@foreach($applicant->institution as $institution)--}}
                                    {{--{{ $institution-> inst_name1 }}--}}

                        </div>
                    </div>
                </div>

                <p>
                    {{--{{dump($applicantt)}}--}}
                </p>
                <br>

                @endforeach
                @endforeach
                {{--@endforeach--}}

            </div>
        </div>
    </div>
@endsection

@section('footerSection')


@endsection