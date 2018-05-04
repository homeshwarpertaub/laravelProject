@extends('admin.layouts.app')
@section('title','View Category')
@section('activecatview','active')

@section('headSection')
    <link href="{{asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet">

@endsection

@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="white-box">

                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Serial Num</th>
                                <th>Category Name</th>
                                <th>slug</th>

                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)

                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $category -> category_name }}</td>
                                    <td>{{$category->slug}}</td>

                                    <td>
                                        <a class="btn btn-info" href="{{ route('category.edit',$category->id) }}"><i
                                                    class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form id="deleteCourse-{{ $category->id }}" method="post"
                                              action="{{ route('category.destroy',$category->id) }}" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}</form>
                                        <button type="button" class="btn btn-danger"
                                                onclick="event.preventDefault();document.getElementById('deleteCourse-{{ $category->id }}').submit();">
                                            <i class="fa fa-trash-o"></i></button>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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

@section('footerSection')
    <script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    {{--<script src="{{ asset('admin/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
                    ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });

            });
        });
    </script>

@endsection