@extends('applicant/app')
@section('title','HomePage')
@section('main-content')

<div class="" style="background-image: url({{asset('user/img/wizard-profile.jpg')}})">

    <!--   Main container   -->
    <div class="container example z-depth-5">
        <div class="row justify-content-md-center">
            <div class="jumbotron col-md-12"><!-- Nav tabs -->
                <h1 class="h1 main-title text-center h1-responsive">UNIVERSITY OF TECHNOLOGY, MAURITIUS {{ Auth::user()->id }}</h1>
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
                                <form action="{{ route('apply.store') }}" role="form" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="lead text-center">PERSONAL DETAILS</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="surname" class="form-control"
                                                    name="profileSurname">
                                                    <label for="surname">Surname</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="otherNames" class="form-control"
                                                    name="profileOthername">
                                                    <label for="otherNames">Other name(s) Mr./Mrs./Miss.</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="md-form">
                                                    <i class="fa fa-user-o prefix"></i>
                                                    <input type="text" id="maiden" class="form-control"
                                                    name="maidenName">
                                                    <label for="maiden">Maiden name (if applicable)</label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group row">
                                                <label for="date" class="col-5 col-form-label lead">Date of
                                                birth</label>
                                                <div class="col-7">
                                                    <input class="form-control" type="date"
                                                    id="date" name="profileDate">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sex" class="col-4 col-form-label lead">Sex</label>
                                                <div class="col-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio"
                                                            name="sex" id="male"
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
                                                            name="status" id="married" value="Married"
                                                            > Married
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
                                                            name="nationality" id="mauritian" value="Mauritian"
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
                                                <div class="md-form">
                                                    <input type="text" id="pid" class="form-control" name="pid">
                                                    <label for="pid">National ID Number</label>
                                                </div>
                                                <div class="md-form">
                                                    <label for="notMauritian">If not Mauritian, specify </label>
                                                    <input type="text" id="notMauritian" class="form-control"
                                                    name="notMauritian">
                                                    <small>Please attach copy of ID Card/Other Identification/Passport
                                                    </small>
                                                    <input type="file" id="file" name="uploadNationality">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <div class="md-form">
                                                    <i class="fa fa-address-book-o prefix"></i>
                                                    <input type="text" id="address" class="form-control"
                                                    name="profileAddress">
                                                    <label for="address">Address (In full)</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-10">
                                                    <div class="md-form">
                                                        <i class="fa fa-phone prefix"></i>
                                                        <input type="tel" id="home" class="form-control"
                                                        name="profileHome">
                                                        <label for="home">Home</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <i class="fa fa-phone-square prefix"></i>
                                                        <input type="tel" id="office" class="form-control"
                                                        name="profileOffice">
                                                        <label for="office">Office</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <i class="fa fa-mobile prefix"></i>
                                                        <input type="tel" id="mobile" class="form-control"
                                                        name="profileMobile">
                                                        <label for="mobile">Mobile</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group row">
                                                <div class="md-form">
                                                    <i class="fa fa-fax prefix"></i>
                                                    <input type="tel" id="fax" class="form-control" name="profileFax">
                                                    <label for="fax">Fax Number</label>
                                                </div>
                                                <div class="md-form">
                                                    <i class="fa fa-envelope-o prefix"></i>
                                                    <input type="email" id="email" class="form-control"
                                                    name="profileEmail">
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
                                                                <div class="md-form">
                                                                    <input type="text" id="title1" class="form-control"
                                                                    name="title1">
                                                                    <label for="title1">Programme Title here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <select name="choiceDuration1" id="choiceDuration1" class="custom-select">
                                                                        <option selected>Choose</option>
                                                                        <option value="1">Part Time</option>
                                                                        <option value="2">Full Time</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="code1" class="form-control"
                                                                    name="code1">
                                                                    <label for="code1">Programme Code here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="title2" class="form-control"
                                                                    name="title2">
                                                                    <label for="title2">Programme Title here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <select name="choiceDuration2" id="choiceDuration2" class="custom-select">
                                                                        <option selected>Choose</option>
                                                                        <option value="1">Part Time</option>
                                                                        <option value="2">Full Time</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="code2" class="form-control"
                                                                    name="code2">
                                                                    <label for="code2">Programme Code here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="title3" class="form-control"
                                                                    name="title3">
                                                                    <label for="title3">Programme Title here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <select name="choiceDuration3" id="choiceDuration3" class="custom-select">
                                                                        <option selected>Choose</option>
                                                                        <option value="1">Part Time</option>
                                                                        <option value="2">Full Time</option>
                                                                    </select>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="code3" class="form-control"
                                                                    name="code3">
                                                                    <label for="code3">Programme Code here</label>
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
                                                                <div class="md-form">
                                                                    <input type="text" id="institution1"
                                                                    class="form-control"
                                                                    name="institution1">
                                                                    <label for="institution1">Institution Name
                                                                    here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input class="form-control" type="date"
                                                                id="dateEntered" name="entered1">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="date"
                                                            id="dateLeft" name="left1">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="md-form">
                                                                    <input type="text" id="institution2"
                                                                    class="form-control"
                                                                    name="institution2">
                                                                    <label for="institution2">Institution Name
                                                                    here</label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input class="form-control" type="date"
                                                                id="dateEntered" name="entered2">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input class="form-control" type="date"
                                                            id="dateLeft" name="left2">
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
                                            <div class="btn btn-primary btn-sm">
                                                <span>Choose file</span>
                                                <input type="file" name="scAttachment[]" multiple="true">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12"><h5 class="text-center lead">Upload all your Higher School
                                    Certificates here.</h5>
                                    <div class="md-form">
                                        <div class="btn btn-primary btn-sm">
                                            <span>Choose file</span>
                                            <input type="file" name="hscAttachment[]" multiple="true">

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
                                        </p></div>
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
                                                <th>Duration (months)</th>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="otherCourse1" class="form-control"
                                                        name="otherCourse1">
                                                        <label for="otherCourse1">course1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="otherinst1" class="form-control"
                                                        name="otherInsti1">
                                                        <label for="otherinst1">inst1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="othergrade1" class="form-control"
                                                        name="othergrade1">
                                                        <label for="othergrade1">gradee1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" type="date"
                                                        id="from1" name="from1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" type="date"
                                                        id="to1" name="to1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="otherCourse2" class="form-control"
                                                        name="otherCourse2">
                                                        <label for="otherCourse2">course1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="otherinst2" class="form-control"
                                                        name="otherInsti2">
                                                        <label for="otherinst2">inst1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="md-form">
                                                        <input type="text" id="othergrade2" class="form-control"
                                                        name="othergrade2">
                                                        <label for="othergrade2">gradee1 here</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" type="date"
                                                        id="from2" name="from2">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input class="form-control" type="date"
                                                        id="to2" name="to2">
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
                                                        <div class="md-form">
                                                            <input type="text" id="name" class="form-control"
                                                            name="jobName1">
                                                            <label for="name">Name here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="address1" class="form-control"
                                                            name="jobAddress1">
                                                            <label for="address1">Address here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="position" class="form-control"
                                                            name="jobPosition1">
                                                            <label for="position">Insert here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="description" class="form-control"
                                                            name="jobDescription1">
                                                            <label for="description">Description here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input class="form-control" type="date"
                                                                   id="from" name="jobFromDate1">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input class="form-control" type="date"
                                                                   id="to" name="jobToDate1">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="name2" class="form-control"
                                                            name="jobName2">
                                                            <label for="name2">Name here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="address2" class="form-control"
                                                            name="jobAddress2">
                                                            <label for="address2">Address here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="position2" class="form-control"
                                                            name="jobPosition2">
                                                            <label for="position2">Insert here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="md-form">
                                                            <input type="text" id="description2" class="form-control"
                                                            name="jobDescription2">
                                                            <label for="description2">Description here</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input class="form-control" type="date"
                                                                   id="from" name="jobFromDate2">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input class="form-control" type="date"
                                                                   id="to" name="jobToDate2">
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
                                    <div class="md-form">
                                        <input type="text" id="parentName" class="form-control"
                                        name="parentName">
                                        <label for="parentName">Name of parent/guardian</label>
                                    </div>
                                    <div class="md-form">
                                        <input type="text" id="parentAddress" class="form-control"
                                        name="parentAddress">
                                        <label for="parentAddress">His/Her Address</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="phone">Phone Number (if any)</label>
                                    <div class="md-form">
                                        <i class="fa fa-phone prefix"></i>
                                        <input type="tel" id="home" class="form-control"
                                        name="parentHome">
                                        <label for="home">Home</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-phone-square prefix"></i>
                                        <input type="tel" id="office" class="form-control"
                                        name="parentOffice">
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
                                    <h5 style="text-decoration: underline">REFEREE 1</h5>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" id="refereeName" class="form-control"
                                            name="refereeName">
                                            <label for="refereeName">Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-briefcase prefix"></i>
                                            <input type="text" id="refereeOccupation" class="form-control"
                                            name="refereeOccupation">
                                            <label for="refereeOccupation">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-address-card prefix"></i>
                                            <input type="text" id="refereeAddress" class="form-control"
                                            name="refereeAddress">
                                            <label for="refereeAddress">Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-phone prefix"></i>
                                            <input type="tel" id="refereePhone" class="form-control"
                                            name="refereePhone">
                                            <label for="refereePhone">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 style="text-decoration: underline">REFEREE 2</h5>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" id="refereeName2" class="form-control"
                                            name="refereeName2">
                                            <label for="refereeName2">Name</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-briefcase prefix"></i>
                                            <input type="text" id="refereeOccupation2" class="form-control"
                                            name="refereeOccupation2">
                                            <label for="refereeOccupation2">Occupation</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-address-card prefix"></i>
                                            <input type="text" id="refereeAddress2" class="form-control"
                                            name="refereeAddress2">
                                            <label for="refereeAddress2">Address</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="md-form">
                                            <i class="fa fa-phone prefix"></i>
                                            <input type="tel" id="refereePhone2" class="form-control"
                                            name="refereePhone2">
                                            <label for="refereePhone2">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <p>Have you any particular career in view?</p>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                name="careerChoice" id="yes"
                                                value="Yes"> Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio"
                                                name="careerChoice" id="no"
                                                value="No"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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