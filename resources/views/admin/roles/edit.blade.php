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
                        Edit Roles
                    </h3>
                    @include('includes.messages')
                    <form action="{{ route('role.update',$role->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-md-12">Role Title</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" placeholder="Role Title"
                                       id="name" value="{{$role->name}}"></div>
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <label for="name">Posts Permissions</label>
                                @foreach($permissions as $permission)
                                    @if($permission->to_do == 'post')
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]"
                                                          value="{{ $permission->id }}"
                                                @foreach($role->permissions as $role_permit)
                                                    @if($role_permit->id == $permission->id) checked @endif @endforeach>{{ $permission->name }}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-md-4">
                                <label for="name">User Permissions</label>
                                @foreach($permissions as $permission)
                                    @if($permission->to_do == 'user')
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]"
                                                          value="{{ $permission->id }}" @foreach($role->permissions as $role_permit)
                                                          @if($role_permit->id == $permission->id) checked @endif @endforeach>{{ $permission->name }}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>

                            <div class="col-md-4">
                                <label for="name">Other Permissions</label>
                                @foreach($permissions as $permission)
                                    @if($permission->to_do == 'other')
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="permission[]"
                                                          value="{{ $permission->id }}" @foreach($role->permissions as $role_permit)
                                                          @if($role_permit->id == $permission->id) checked @endif @endforeach>{{ $permission->name }}</label>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>


                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <a href="{{route('role.index')}}" class="btn btn-warning">Back</a>

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