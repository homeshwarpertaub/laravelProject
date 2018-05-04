@extends('admin.layouts.app')
@section('title','View Permissions')
@section('activepermissionview','active')

@section('headSection')
    <link href="{{asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">

@endsection
@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">

            <div class="col-md-12">
                <a href="{{route('permission.create')}}" class="btn btn-success m-b-20">Add New Permission</a>

                <div class="white-box">

                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Serial Num</th>
                                <th>Permission Name</th>
                                <th>Permission For</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)

                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $permission -> name }}</td>
                                    <td>{{ $permission -> to_do }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('permission.edit',$permission->id) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form id="deleteCourse-{{ $permission->id }}" method="post" action="{{ route('permission.destroy',$permission->id) }}" style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}</form> <button type="button" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('deleteCourse-{{ $permission->id }}').submit();"><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        @include('includes.messages')
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