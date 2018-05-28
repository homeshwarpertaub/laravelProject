@extends('admin.layouts.app')
@section('title','Create Permissions')
@section('activepermissioncreate','active')

@section('headSection')

    <link href="{{asset('admin/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet">

@endsection

@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        Create Permissions
                    </h3>
                    @include('includes.messages')
                    <form action="{{ route('permission.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-12">Permission Title</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" required name="name" placeholder="Permission Title"
                                       id="name" required></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="to_do">Permission for</label>
                            <select name="to_do" id="to_do" class="form-control" required>
                                <option selected disabled>Select Permission</option>
                                <option value="user">User</option>
                                <option value="course">Course</option>
                                <option value="payment">Payment</option>
                                <option value="delivery">Delivery</option>
                                <option value="result">Result</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>

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