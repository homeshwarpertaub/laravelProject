@extends('admin.layouts.app')

@section('headSection')
    <link href="{{asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">

@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row bg-title">
            <!-- .page title -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Starter Page</h4>
            </div>
            <!-- /.page title -->
            <!-- .breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820"
                   target="_blank"
                   class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy
                    Now</a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Starter Page</li>
                </ol>
            </div>
            <!-- /.breadcrumb -->
        </div>
        <!-- .row -->

        @can('courses.create', Auth::user())
            <a href="{{route('course.create')}}" class="btn btn-success">Add New Course</a>
        @endcan

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Serial Num</th>
                                <th>Course Name</th>
                                <th>Course Mode</th>
                                <th>Course Duration</th>
                                <th>Slug</th>
                                <th>Course Body</th>
                                @can('courses.update', Auth::user())
                                <th>Edit</th>
                                @endcan
                                @can('courses.delete', Auth::user())
                                <th>Delete</th>
                                    @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)

                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $course -> course_name }}</td>
                                    <td>{{ $course -> course_mode }}</td>
                                    <td>{{ $course -> course_duration }}</td>
                                    <td>{{ $course -> slug }}</td>
                                    <td>{{ $course -> course_body }}</td>
                                    @can('courses.update', Auth::user())
                                    <td>
                                        <a class="btn btn-info" href="{{ route('course.edit',$course->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    @endcan
                                    @can('courses.delete', Auth::user())
                                    <td>
                                        <form id="deleteCourse-{{ $course->id }}" method="post" action="{{ route('course.destroy',$course->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}</form> <button type="button" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('deleteCourse-{{ $course->id }}').submit();"><i class="fa fa-trash-o"></i></button></td>
                                        @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img"
                                                              class="img-circle"> <span>Varun Dhavan <small
                                            class="text-success">online</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" alt="user-img"
                                                              class="img-circle"> <span>Genelia Deshmukh <small
                                            class="text-warning">Away</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img"
                                                              class="img-circle"> <span>Ritesh Deshmukh <small
                                            class="text-danger">Busy</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img"
                                                              class="img-circle"> <span>Arijit Sinh <small
                                            class="text-muted">Offline</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img"
                                                              class="img-circle"> <span>Govinda Star <small
                                            class="text-success">online</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img"
                                                              class="img-circle"> <span>John Abraham<small
                                            class="text-success">online</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img"
                                                              class="img-circle"> <span>Hritik Roshan<small
                                            class="text-success">online</small></span></a></li>
                        <li><a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img"
                                                              class="img-circle"> <span>Pwandeep rajan <small
                                            class="text-success">online</small></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.right-sidebar -->
    </div>
    <!-- /.container-fluid -->
@endsection

<!--footer-->
@section('footerSection')
    <script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    {{--<script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable();

        });
    </script>

@endsection