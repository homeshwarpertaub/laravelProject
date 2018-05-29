@extends('applicant/app')
@section('title','Apply Online - My University')
@section('activeapply','active')
@section('main-content')

    <div class="" style="background-image: url({{asset('user/img/wizard-profile.jpg')}})">
        <!--   Main container   -->
        <div class="container example">
            <div class="row justify-content-md-center">
                <div class="jumbotron col-md-12"><!-- Nav tabs -->
                    <h1 class="h1 main-title text-center h1-responsive">MY UNIVERSITY, MAURITIUS</h1>
                    <hr>
                    <h4 class="h4-responsive text-center">APPLICATION FOR ADMISSION: ACADEMIC YEAR 2018/2019</h4>
                    <hr>
                    <ul class="nav nav-tabs nav-justified primary-color-dark" role="tablist">
                        <li class="example hoverable nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><i
                                        class="fa fa-user"></i> Profile</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Tab Profile-->
                        <div class="tab-pane fade in show active" id="profile" role="tabpanel">
                            <br>
                            <div class="container">
                                {{--row 1--}}
                                {{--@include('includes.messages')--}}

                                <form action="{{ route('apply.store') }}" role="form" method="post"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="lead text-center">PERSONAL DETAILS</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="form-group {{ $errors->has('profileSurname') ? ' has-error' : '' }}">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="surname" required autofocus class="form-control"
                                                           name="profileSurname" value="{{ old('profileSurname') }}">
                                                    @if ($errors->has('profileSurname'))
                                                        <div class="text-danger">{{ $errors->first('profileSurname') }}</div>
                                                    @endif
                                                    <label for="surname">Surname</label>
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('profileOthername') ? ' has-error' : '' }}">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="otherNames" required autofocus class="form-control"
                                                           name="profileOthername"
                                                           value="{{ old('profileOthername') }}"> @if ($errors->has('profileOthername'))
                                                        <div class="text-danger">{{ $errors->first('profileOthername') }}</div>
                                                    @endif
                                                    <label for="otherNames">Other name(s) Mr./Mrs./Miss.</label>
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('maidenName') ? ' has-error' : '' }}">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="maiden" class="form-control"
                                                           name="maidenName"
                                                           value="{{ old('maidenName') }}"> @if ($errors->has('maidenName'))
                                                        <div class="text-danger">{{ $errors->first('maidenName') }}</div>
                                                    @endif
                                                    <label for="maiden">Maiden name (if applicable)</label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row {{ $errors->has('profileDate') ? ' has-error' : '' }}">
                                                <label for="date" class="col-5 col-form-label lead"><i
                                                            class="fa fa-birthday-cake" aria-hidden="true"></i> Date of
                                                    birth</label>
                                                <div class="col-7">
                                                    <input class="form-control" type="date"
                                                           id="date" name="profileDate" value="{{ old('profileDate') }}"
                                                           autofocus required> @if ($errors->has('profileDate'))
                                                        <div class="text-danger">{{ $errors->first('profileDate') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="sex" class="col-4 col-form-label lead">Sex</label>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="sex" required id="male"
                                                                   value="Male"> Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="sex" id="female"
                                                                   value="Female"> Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="status" class="col-4 col-form-label lead">Status</label>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="status" required id="married" value="Married">
                                                            Married
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="status" id="single" value="Single"
                                                            > Single
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{--row 2--}}
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group row">
                                                <label for="nationality"
                                                       class="col-4 col-form-label lead">Nationality</label>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="nationality" required id="mauritian" value="Mauritian"
                                                            > Mauritian
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                                   name="nationality" id="other" value="Other"
                                                            > Other
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="md-form {{ $errors->has('pid') ? ' has-error' : '' }}">
                                                    <input type="text" id="pid" class="form-control"
                                                           value="{{ old('pid') }}" autofocus required
                                                           name="pid"> @if ($errors->has('pid'))
                                                        <div class="text-danger">{{ $errors->first('pid') }}</div>
                                                    @endif
                                                    <label for="pid">National ID Number</label>
                                                </div>
                                                <div class="md-form {{ $errors->has('notMauritian') ? ' has-error' : '' }}">
                                                    <label for="notMauritian">If not Mauritian, specify </label>
                                                    <input type="text" id="notMauritian"
                                                           value="{{ old('notMauritian') }}" class="form-control"
                                                           name="notMauritian"> @if ($errors->has('notMauritian'))
                                                        <div class="text-danger">{{ $errors->first('notMauritian') }}</div>
                                                    @endif
                                                    <small>Please attach copy of ID Card/Other Identification/Passport
                                                    </small>
                                                    <input type="file" class="btn btn-outline-primary"
                                                           value="{{ old('uploadNationality') }}" id="file"
                                                           name="uploadNationality" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group {{ $errors->has('profileAddress') ? ' has-error' : '' }}">
                                                <div class="md-form">
                                                    <i class="fa fa-address-book-o prefix"></i>
                                                    <input type="text" id="address" class="form-control"
                                                           name="profileAddress" value="{{ old('profileAddress') }}"
                                                           autofocus required> @if ($errors->has('profileAddress'))
                                                        <div class="text-danger">{{ $errors->first('profileAddress') }}</div>
                                                    @endif
                                                    <label for="address">Address (In full)</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-10">
                                                    <div class="md-form {{ $errors->has('profileHome') ? ' has-error' : '' }}">
                                                        <i class="fa fa-phone prefix"></i>
                                                        <input type="tel" id="home" class="form-control"
                                                               name="profileHome" value="{{ old('profileHome') }}"
                                                               autofocus required> @if ($errors->has('profileHome'))
                                                            <div class="text-danger">{{ $errors->first('profileHome') }}</div>
                                                        @endif
                                                        <label for="home">Home</label>
                                                    </div>
                                                    <div class="md-form {{ $errors->has('profileOffice') ? ' has-error' : '' }}">
                                                        <i class="fa fa-phone-square prefix"></i>
                                                        <input type="tel" id="office" class="form-control"
                                                               name="profileOffice" value="{{ old('profileOffice') }}"
                                                               autofocus required> @if ($errors->has('profileOffice'))
                                                            <div class="text-danger">{{ $errors->first('profileOffice') }}</div>
                                                        @endif
                                                        <label for="office">Office</label>
                                                    </div>
                                                    <div class="md-form {{ $errors->has('profileMobile') ? ' has-error' : '' }}">
                                                        <i class="fa fa-mobile prefix"></i>
                                                        <input type="tel" id="mobile" class="form-control"
                                                               name="profileMobile" value="{{ old('profileMobile') }}"
                                                               autofocus required> @if ($errors->has('profileMobile'))
                                                            <div class="text-danger">{{ $errors->first('profileMobile') }}</div>
                                                        @endif
                                                        <label for="mobile">Mobile</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group row {{ $errors->has('profileFax') ? ' has-error' : '' }}">
                                                <div class="md-form">
                                                    <i class="fa fa-fax prefix"></i>
                                                    <input type="tel" id="fax" class="form-control" name="profileFax"
                                                           value="{{ old('profileFax') }}" autofocus required>
                                                    <label for="fax">Fax Number</label> @if ($errors->has('profileFax'))
                                                        <div class="text-danger">{{ $errors->first('profileFax') }}</div>
                                                    @endif
                                                </div>
                                                <div class="md-form {{ $errors->has('profileEmail') ? ' has-error' : '' }}">
                                                    <i class="fa fa-envelope-o prefix"></i>
                                                    <input type="email" id="email" class="form-control"
                                                           name="profileEmail" value="{{ old('profileEmail') }}"
                                                           autofocus required> @if ($errors->has('profileEmail'))
                                                        <div class="text-danger">{{ $errors->first('profileEmail') }}</div>
                                                    @endif
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{--row 3--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="lead text-center">PROGRAMME OF STUDY APPLIED FOR <span
                                                        class="text-muted small"> (In order of preferences, only courses you are interested in)</span>
                                            </h5>
                                            <table id="myTable" class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Programme Title</th>
                                                    <th>Part Time/Full Time</th>
                                                    <th>Programme Code</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('title1') ? ' has-error' : '' }}">
                                                                <input type="text" id="title1" class="form-control"
                                                                       name="title1" value="{{ old('title1') }}"
                                                                       autofocus required> @if ($errors->has('title1'))
                                                                    <div class="text-danger">{{ $errors->first('title1') }}</div>
                                                                @endif
                                                                <label for="title1">Programme Title here</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form">
                                                                <select name="choiceDuration1" id="choiceDuration1"
                                                                        class="custom-select" required>
                                                                    <option value="">Choose</option>
                                                                    <option value="1">Part Time</option>
                                                                    <option value="2">Full Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('code1') ? ' has-error' : '' }}">
                                                                <input type="text" id="code1" class="form-control"
                                                                       name="code1" value="{{ old('code1') }}"
                                                                       autofocus required>
                                                                <label for="code1">Programme Code
                                                                    here</label> @if ($errors->has('code1'))
                                                                    <div class="text-danger">{{ $errors->first('code1') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('title2') ? ' has-error' : '' }}">
                                                                <input type="text" id="title2" class="form-control"
                                                                       name="title2" value="{{ old('title2') }}"
                                                                       autofocus required> @if ($errors->has('title2'))
                                                                    <div class="text-danger">{{ $errors->first('title2') }}</div>
                                                                @endif
                                                                <label for="title2">Programme Title here</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form">
                                                                <select name="choiceDuration2" id="choiceDuration2"
                                                                        class="custom-select" required>
                                                                    <option value="">Choose</option>
                                                                    <option value="1">Part Time</option>
                                                                    <option value="2">Full Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('code2') ? ' has-error' : '' }}">
                                                                <input type="text" id="code2" class="form-control"
                                                                       name="code2" value="{{ old('code2') }}"
                                                                       autofocus required>
                                                                <label for="code2">Programme Code
                                                                    here</label> @if ($errors->has('code2'))
                                                                    <div class="text-danger">{{ $errors->first('code2') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('title3') ? ' has-error' : '' }}">
                                                                <input type="text" id="title3" class="form-control"
                                                                       name="title3" value="{{ old('title3') }}"
                                                                       autofocus required>
                                                                <label for="title3">Programme Title
                                                                    here</label> @if ($errors->has('title3'))
                                                                    <div class="text-danger">{{ $errors->first('title3') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form">
                                                                <select name="choiceDuration3" id="choiceDuration3"
                                                                        class="custom-select" required>
                                                                    <option value="">Choose</option>
                                                                    <option value="1">Part Time</option>
                                                                    <option value="2">Full Time</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('code3') ? ' has-error' : '' }}">
                                                                <input type="text" id="code3" class="form-control"
                                                                       name="code3" value="{{ old('code3') }}"
                                                                       autofocus required>
                                                                <label for="code3">Programme Code
                                                                    here</label> @if ($errors->has('code3'))
                                                                    <div class="text-danger">{{ $errors->first('code3') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="lead text-center">EDUCATIONAL DETAILS
                                                <small class="text-muted">(Note: Qualifications obtained after the
                                                    closing
                                                    date
                                                    will not be
                                                    considered)
                                                </small>
                                            </h5>
                                            <p class="small text-center">Details of duly certified true copies of
                                                Secondary
                                                Schools
                                                and/or Tertiary Education Institutions attended.</p>
                                            <table id="educationTable" class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Institutions</th>
                                                    <th>Month/Year Entered</th>
                                                    <th>Month/Year Left</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('institution1') ? ' has-error' : '' }}">
                                                                <input type="text" id="institution1"
                                                                       class="form-control"
                                                                       name="institution1"
                                                                       value="{{ old('institution1') }}" autofocusrequired>
                                                                <label for="institution1">Institution Name
                                                                    here</label> @if ($errors->has('institution1'))
                                                                    <div class="text-danger">{{ $errors->first('institution1') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('entered1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="dateEntered" value="{{ old('entered1') }}"
                                                                   name="entered1" required> @if ($errors->has('entered1'))
                                                                <div class="text-danger">{{ $errors->first('entered1') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('left1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="dateLeft" value="{{ old('left1') }}"
                                                                   name="left1" required> @if ($errors->has('left1'))
                                                                <div class="text-danger">{{ $errors->first('left1') }}</div>
                                                            @endif</div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="md-form {{ $errors->has('institution2') ? ' has-error' : '' }}">
                                                                <input type="text" id="institution2"
                                                                       class="form-control"
                                                                       name="institution2"
                                                                       value="{{ old('institution2') }}" autofocus required>
                                                                <label for="institution2">Institution Name
                                                                    here</label> @if ($errors->has('institution2'))
                                                                    <div class="text-danger">{{ $errors->first('institution2') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('entered2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="dateEntered" value="{{ old('entered2') }}"
                                                                   name="entered2" required> @if ($errors->has('entered2'))
                                                                <div class="text-danger">{{ $errors->first('entered2') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('left2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="dateLeft" value="{{ old('left2') }}"
                                                                   name="left2" required> @if ($errors->has('left2'))
                                                                <div class="text-danger">{{ $errors->first('left2') }}</div>
                                                            @endif</div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12"><h5 class="text-center lead">Upload all your School
                                                Certificates
                                                here.</h5>
                                            <div class="md-form">
                                                <div class="btn btn-outline-primary btn-sm">
                                                    <span>Choose file</span>
                                                    <input type="file" name="scAttachment[]"
                                                           value="{{ old('scAttachment[]') }}" required multiple="true"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12"><h5 class="text-center lead">Upload all your Higher School
                                                Certificates here.</h5>
                                            <div class="md-form">
                                                <div class="btn btn-outline-primary btn-sm">
                                                    <span>Choose file</span>
                                                    <input type="file" name="hscAttachment[]"
                                                           value="{{ old('hscAttachment[]') }}" required
                                                           multiple="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    {{--Mature Applicants Note--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card border border-warning z-depth-0">
                                                <div class="card-body small"><p><strong>FOR MATURE APPLICANTS
                                                            ONLY</strong></p>
                                                    <p>Please attach scanned relevant documents including:
                                                    <ul>
                                                        <li>
                                                            Copies of exams with grades achieved
                                                        </li>
                                                        <li>
                                                            Details of working experience plus home and social
                                                            responsibilities,
                                                            detailing skills developed and practical knowledge acquired
                                                        </li>
                                                        <li>
                                                            A reference for the working experience and other
                                                            responsibilities
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12"><h4 class="lead text-center">Other Qualifications</h4>
                                            <p class="small lead">It is the responsibility of the applicant to ensure
                                                and to
                                                provide proof that the
                                                qualifications meet the requirements for entry on the programmes applied
                                                for
                                                and
                                                are recognized nationally and/or considered equivalent.</p>

                                            <table id="OtherQualifications" class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th>Courses/Programmes</th>
                                                    <th>Institutions</th>
                                                    <th>Grade Awarded</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('otherCourse1') ? ' has-error' : '' }}">
                                                            <input type="text" id="otherCourse1" class="form-control"
                                                                   name="otherCourse1" value="{{ old('otherCourse1') }}"
                                                                   autofocus required> @if ($errors->has('otherCourse1'))
                                                                <div class="text-danger">{{ $errors->first('otherCourse1') }}</div>
                                                            @endif
                                                            <label for="otherCourse1">course1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('otherInsti1') ? ' has-error' : '' }}">
                                                            <input type="text" id="otherinst1" class="form-control"
                                                                   name="otherInsti1" value="{{ old('otherInsti1') }}"
                                                                   autofocus required> @if ($errors->has('otherInsti1'))
                                                                <div class="text-danger">{{ $errors->first('otherInsti1') }}</div>
                                                            @endif
                                                            <label for="otherinst1">inst1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('othergrade1') ? ' has-error' : '' }}">
                                                            <input type="text" id="othergrade1" class="form-control"
                                                                   name="othergrade1" value="{{ old('othergrade1') }}"
                                                                   autofocus required> @if ($errors->has('othergrade1'))
                                                                <div class="text-danger">{{ $errors->first('othergrade1') }}</div>
                                                            @endif
                                                            <label for="othergrade1">gradee1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('from1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="from1" value="{{ old('from1') }}"
                                                                   name="from1" required> @if ($errors->has('from1'))
                                                                <div class="text-danger">{{ $errors->first('from1') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('to1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="to1" value="{{ old('to1') }}"
                                                                   name="to1" required> @if ($errors->has('to1'))
                                                                <div class="text-danger">{{ $errors->first('to1') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('otherCourse2') ? ' has-error' : '' }}">
                                                            <input type="text" id="otherCourse2" class="form-control"
                                                                   name="otherCourse2" value="{{ old('otherCourse2') }}"
                                                                   autofocus required> @if ($errors->has('otherCourse2'))
                                                                <div class="text-danger">{{ $errors->first('otherCourse2') }}</div>
                                                            @endif
                                                            <label for="otherCourse2">course1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('otherInsti2') ? ' has-error' : '' }}">
                                                            <input type="text" id="otherinst2" class="form-control"
                                                                   name="otherInsti2" value="{{ old('otherInsti2') }}"
                                                                   autofocus required> @if ($errors->has('otherInsti2'))
                                                                <div class="text-danger">{{ $errors->first('otherInsti2') }}</div>
                                                            @endif
                                                            <label for="otherinst2">inst1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('othergrade2') ? ' has-error' : '' }}">
                                                            <input type="text" id="othergrade2" class="form-control"
                                                                   name="othergrade2" value="{{ old('othergrade2') }}"
                                                                   autofocus required> @if ($errors->has('othergrade2'))
                                                                <div class="text-danger">{{ $errors->first('othergrade2') }}</div>
                                                            @endif
                                                            <label for="othergrade2">gradee1 here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('from2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="from2" value="{{ old('from2') }}"
                                                                   name="from2" required> @if ($errors->has('from2'))
                                                                <div class="text-danger">{{ $errors->first('from2') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('to2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="to2" value="{{ old('to2') }}"
                                                                   name="to2" required> @if ($errors->has('to2'))
                                                                <div class="text-danger">{{ $errors->first('to2') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="lead text-center">THIS SECTION SHOULD BE FILLED IN BY THOSE IN
                                                EMPLOYMENT</h5>
                                            <h6 class="text-center">Give all relevant information about previous and
                                                current
                                                employment, if
                                                applicable as follows</h6>
                                            <table id="employmentTable" class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Name of Employers/Firms</th>
                                                    <th>Address of Employers/Firms</th>
                                                    <th>Positions Held</th>
                                                    <th>Job Description</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                </tr>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobName1') ? ' has-error' : '' }}">
                                                            <input type="text" id="name" class="form-control"
                                                                   name="jobName1" value="{{ old('jobName1') }}"
                                                                   autofocus required> @if ($errors->has('jobName1'))
                                                                <div class="text-danger">{{ $errors->first('jobName1') }}</div>
                                                            @endif
                                                            <label for="name">Name here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobAddress1') ? ' has-error' : '' }}">
                                                            <input type="text" id="address1" class="form-control"
                                                                   name="jobAddress1" value="{{ old('jobAddress1') }}"
                                                                   autofocus required> @if ($errors->has('jobAddress1'))
                                                                <div class="text-danger">{{ $errors->first('jobAddress1') }}</div>
                                                            @endif
                                                            <label for="address1">Address here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobPosition1') ? ' has-error' : '' }}">
                                                            <input type="text" id="position" class="form-control"
                                                                   name="jobPosition1" value="{{ old('jobPosition1') }}"
                                                                   autofocus required> @if ($errors->has('jobPosition1'))
                                                                <div class="text-danger">{{ $errors->first('jobPosition1') }}</div>
                                                            @endif
                                                            <label for="position">Insert here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobDescription1') ? ' has-error' : '' }}">
                                                            <input type="text" id="description" class="form-control"
                                                                   name="jobDescription1"
                                                                   value="{{ old('jobDescription1') }}"
                                                                   autofocus required> @if ($errors->has('jobDescription1'))
                                                                <div class="text-danger">{{ $errors->first('jobDescription1') }}</div>
                                                            @endif
                                                            <label for="description">Description here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('jobFromDate1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="from" name="jobFromDate1"
                                                                   value="{{ old('jobFromDate1') }}" required> @if ($errors->has('jobFromDate1'))
                                                                <div class="text-danger">{{ $errors->first('jobFromDate1') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('jobToDate1') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="to" name="jobToDate1"
                                                                   value="{{ old('jobToDate1') }}" required> @if ($errors->has('jobToDate1'))
                                                                <div class="text-danger">{{ $errors->first('jobToDate1') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobName2') ? ' has-error' : '' }}">
                                                            <input type="text" id="name2" class="form-control"
                                                                   name="jobName2" value="{{ old('jobName2') }}"
                                                                   autofocus required> @if ($errors->has('jobName2'))
                                                                <div class="text-danger">{{ $errors->first('jobName2') }}</div>
                                                            @endif
                                                            <label for="name2">Name here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobAddress2') ? ' has-error' : '' }}">
                                                            <input type="text" id="address2" class="form-control"
                                                                   name="jobAddress2" value="{{ old('jobAddress2') }}"
                                                                   autofocus required> @if ($errors->has('jobAddress2'))
                                                                <div class="text-danger">{{ $errors->first('jobAddress2') }}</div>
                                                            @endif
                                                            <label for="address2">Address here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobPosition2') ? ' has-error' : '' }}">
                                                            <input type="text" id="position2" class="form-control"
                                                                   name="jobPosition2" value="{{ old('jobPosition2') }}"
                                                                   autofocus required> @if ($errors->has('jobPosition2'))
                                                                <div class="text-danger">{{ $errors->first('jobPosition2') }}</div>
                                                            @endif
                                                            <label for="position2">Insert here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form {{ $errors->has('jobDescription2') ? ' has-error' : '' }}">
                                                            <input type="text" id="description2" class="form-control"
                                                                   name="jobDescription2"
                                                                   value="{{ old('jobDescription2') }}"
                                                                   autofocus required> @if ($errors->has('jobDescription2'))
                                                                <div class="text-danger">{{ $errors->first('jobDescription2') }}</div>
                                                            @endif
                                                            <label for="description2">Description here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('jobFromDate2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="from" name="jobFromDate2"
                                                                   value="{{ old('jobFromDate2') }}" required> @if ($errors->has('jobFromDate2'))
                                                                <div class="text-danger">{{ $errors->first('jobFromDate2') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('jobToDate2') ? ' has-error' : '' }}">
                                                            <input class="form-control" type="date"
                                                                   id="to" name="jobToDate2"
                                                                   value="{{ old('jobToDate2') }}" required> @if ($errors->has('jobToDate2'))
                                                                <div class="text-danger">{{ $errors->first('jobToDate2') }}</div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                                </thead>
                                            </table>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="text-center lead">THIS SECTION SHOULD BE FILLED IN IF YOU ARE
                                                UNDER 18
                                                YEARS OF AGE</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="md-form {{ $errors->has('parentName') ? ' has-error' : '' }}">
                                                <i class="fa fa-user-o prefix"></i>
                                                <input type="text" id="parentName" class="form-control"
                                                       name="parentName"
                                                       value="{{ old('parentName') }}"> @if ($errors->has('parentName'))
                                                    <div class="text-danger">{{ $errors->first('parentName') }}</div>
                                                @endif
                                                <label for="parentName">Name of parent/guardian</label>
                                            </div>
                                            <div class="md-form {{ $errors->has('parentAddress') ? ' has-error' : '' }}">
                                                <i class="fa fa-address-book-o prefix"></i>
                                                <input type="text" id="parentAddress" class="form-control"
                                                       name="parentAddress"
                                                       value="{{ old('parentAddress') }}"> @if ($errors->has('parentAddress'))
                                                    <div class="text-danger">{{ $errors->first('parentAddress') }}</div>
                                                @endif
                                                <label for="parentAddress">His/Her Address</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="phone">Phone Number (if any)</label>
                                            <div class="md-form {{ $errors->has('parentHome') ? ' has-error' : '' }}">
                                                <i class="fa fa-phone prefix"></i>
                                                <input type="tel" id="home" class="form-control"
                                                       name="parentHome"
                                                       value="{{ old('parentHome') }}"> @if ($errors->has('parentHome'))
                                                    <div class="text-danger">{{ $errors->first('parentHome') }}</div>
                                                @endif
                                                <label for="home">Home</label>
                                            </div>
                                            <div class="md-form {{ $errors->has('parentOffice') ? ' has-error' : '' }}">
                                                <i class="fa fa-phone-square prefix"></i>
                                                <input type="tel" id="office" class="form-control"
                                                       name="parentOffice"
                                                       value="{{ old('parentOffice') }}"> @if ($errors->has('parentOffice'))
                                                    <div class="text-danger">{{ $errors->first('parentOffice') }}</div>
                                                @endif
                                                <label for="office">Office</label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="text-center lead">REFEREES</h5>
                                            <small class="text-center">(Please obtain their prior agreement. The
                                                University of
                                                Technology, Mauritius
                                                may write to them if you are shortlisted
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 style="text-decoration: underline" class=" mb-3">REFEREE 1</h5>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeName') ? ' has-error' : '' }}">
                                                    <i class="fa fa-user prefix"></i>
                                                    <input type="text" id="refereeName" class="form-control"
                                                           name="refereeName" value="{{ old('refereeName') }}"
                                                           autofocus required> @if ($errors->has('refereeName'))
                                                        <div class="text-danger">{{ $errors->first('refereeName') }}</div>
                                                    @endif
                                                    <label for="refereeName">Name</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeOccupation') ? ' has-error' : '' }}">
                                                    <i class="fa fa-briefcase prefix"></i>
                                                    <input type="text" id="refereeOccupation" class="form-control"
                                                           name="refereeOccupation"
                                                           value="{{ old('refereeOccupation') }}"
                                                           autofocus required> @if ($errors->has('refereeOccupation'))
                                                        <div class="text-danger">{{ $errors->first('refereeOccupation') }}</div>
                                                    @endif
                                                    <label for="refereeOccupation">Occupation</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeAddress') ? ' has-error' : '' }}">
                                                    <i class="fa fa-address-card prefix"></i>
                                                    <input type="text" id="refereeAddress" class="form-control"
                                                           name="refereeAddress" value="{{ old('refereeAddress') }}"
                                                           autofocus required> @if ($errors->has('refereeAddress'))
                                                        <div class="text-danger">{{ $errors->first('refereeAddress') }}</div>
                                                    @endif
                                                    <label for="refereeAddress">Address</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereePhone') ? ' has-error' : '' }}">
                                                    <i class="fa fa-phone prefix"></i>
                                                    <input type="tel" id="refereePhone" class="form-control"
                                                           name="refereePhone" value="{{ old('refereePhone') }}"
                                                           autofocus required> @if ($errors->has('refereePhone'))
                                                        <div class="text-danger">{{ $errors->first('refereePhone') }}</div>
                                                    @endif
                                                    <label for="refereePhone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h5 style="text-decoration: underline" class=" mb-3">REFEREE 2</h5>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeName2') ? ' has-error' : '' }}">
                                                    <i class="fa fa-user prefix"></i>
                                                    <input type="text" id="refereeName2" class="form-control"
                                                           name="refereeName2" value="{{ old('refereeName2') }}"
                                                           autofocus required> @if ($errors->has('refereeName2'))
                                                        <div class="text-danger">{{ $errors->first('refereeName2') }}</div>
                                                    @endif
                                                    <label for="refereeName2">Name</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeOccupation2') ? ' has-error' : '' }}">
                                                    <i class="fa fa-briefcase prefix"></i>
                                                    <input type="text" id="refereeOccupation2" class="form-control"
                                                           name="refereeOccupation2"
                                                           value="{{ old('refereeOccupation2') }}"
                                                           autofocus required> @if ($errors->has('refereeOccupation2'))
                                                        <div class="text-danger">{{ $errors->first('refereeOccupation2') }}</div>
                                                    @endif
                                                    <label for="refereeOccupation2">Occupation</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereeAddress2') ? ' has-error' : '' }}">
                                                    <i class="fa fa-address-card prefix"></i>
                                                    <input type="text" id="refereeAddress2" class="form-control"
                                                           name="refereeAddress2" value="{{ old('refereeAddress2') }}"
                                                           autofocus required> @if ($errors->has('refereeAddress2'))
                                                        <div class="text-danger">{{ $errors->first('refereeAddress2') }}</div>
                                                    @endif
                                                    <label for="refereeAddress2">Address</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form {{ $errors->has('refereePhone2') ? ' has-error' : '' }}">
                                                    <i class="fa fa-phone prefix"></i>
                                                    <input type="tel" id="refereePhone2" class="form-control"
                                                           name="refereePhone2" value="{{ old('refereePhone2') }}"
                                                           autofocus required> @if ($errors->has('refereePhone2'))
                                                        <div class="text-danger">{{ $errors->first('refereePhone2') }}</div>
                                                    @endif
                                                    <label for="refereePhone2">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" onclick=""
                                                    class="btn btn-outline-primary animated flipInY">Submit
                                            </button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>


        @endsection
        @section('userFooter')

            <script>

                $(document).ready(function () {
                    $('#myTable,#educationTable,#scTable,#hscTable,#otherQualifications,#employmentTable').DataTable({
                        paging: false,
                        info: false,
                        sorting: false,
                        searching: false
                    });
                });

                $(document).ready(function () {
//                alert('test');
                });

            </script>

@endsection