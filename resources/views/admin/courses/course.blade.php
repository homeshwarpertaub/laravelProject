@extends('admin.layouts.app')

@section('headSection')

    <link href="{{asset('admin/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">

@endsection

@section('main-content')
    <div class="container-fluid">

        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Bootstrap Wysiwig Editor</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"><a
                        href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
                        target="_blank"
                        class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                    Now</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Wysiwig Editor</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        Course Details
                    </h3>
                    @include('includes.messages')
                    <form action="{{ route('course.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="courseName" class="col-md-12">Course Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="courseName" placeholder="Course Name"
                                       id="courseName" required></div>
                        </div>
                        <div class="form-group">
                            <label for="courseMode" class="col-md-12">Course Mode</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="courseMode" placeholder="Course Mode"
                                       id="courseMode" required></div>
                        </div>
                        <div class="form-group">
                            <label for="courseDuration" class="col-md-12">Course Duration</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="courseDuration"
                                       placeholder="Course Duration"
                                       id="courseDuration" required></div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-12">Slug</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="slug"
                                       placeholder="Slug "
                                       id="slug" required></div>
                        </div>

                        <div class="form-group">
                            <label for="input-file-now col-md-3">Your so fresh input file — Default version</label>
                            <div class="col-md-3">
                            <input type="file" id="input-file-now" class="dropify" /> </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-9">
                                <div class="checkbox checkbox-success">
                                    <input id="checkboxPublish" type="checkbox" name="checkboxPublish">
                                    <label for="checkboxPublish">Publish</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9">
                                <h5 class="m-t-20">Select Category</h5>
                                <select class="select2 m-b-10 select2-multiple" multiple="multiple"
                                        data-placeholder="Course Categories" name="categories[]">
                                    <optgroup label="category 1">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="category 2">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <textarea required class="textarea_editor form-control" rows="25"
                                      placeholder="Enter text ..." name="courseBody"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>

                    </form>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span></div>
                <div class="r-panel-body">
                    <ul>
                        <li><b>Layout Options</b></li>
                        <li>
                            <div class="checkbox checkbox-info">
                                <input id="checkbox1" type="checkbox" class="fxhdr">
                                <label for="checkbox1"> Fix Header </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-warning">
                                <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                <label for="checkbox2"> Fix Sidebar </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-success">
                                <input id="checkbox4" type="checkbox" class="open-close">
                                <label for="checkbox4"> Toggle Sidebar </label>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->

@endsection

@section('footerSection')
    <script src="{{ asset('admin/plugins/bower_components/custom-select/custom-select.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('admin/js/jasny-bootstrap.js') }}"></script>
    <script src="{{ asset('admin/plugins/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            // For select 2
            $(".select2").select2();
            // Basic
            $('.dropify').dropify();

        });

    </script>


@endsection