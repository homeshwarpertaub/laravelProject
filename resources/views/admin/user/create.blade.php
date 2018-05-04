@extends('admin.layouts.app')
@section('title','Create Admin')
@section('activeadmincreate','active')

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
                        Add Admins
                    </h3>
                    @include('includes.messages')
                    <form action="{{ route('user.store') }}" class="form-horizontal" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-12">Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                       id="name" value="{{ old('name') }}"></div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                       id="email"></div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-12">Phone Number</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="phone" placeholder="Phone Number"
                                       id="phone"></div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-12">Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                       id="password"></div>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-md-12">Confirm Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password_confirmation"
                                       placeholder="Confirm Password"
                                       id="password_confirmation"></div>
                        </div>

                        <div class="form-group">
                            <label>Assign Role</label>
                            <div class="row">
                                @foreach($roles as $role)
                                    <div class="col-md-4">
                                        <div class="checkbox checkbox-success">
                                            <input type="checkbox" name="role[]"
                                                   value="{{$role->id}}"> <label>{{$role->name}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>

                    </form>
                </div>

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