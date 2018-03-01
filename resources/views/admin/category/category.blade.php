@extends('admin.layouts.app')

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

        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        Course Category
                    </h3>
                    @include('includes.messages')

                    <form action="{{ route('category.store') }}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="courseCategory" class="col-md-12">Course Category</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="courseCategory"
                                       placeholder="Course Category"
                                       id="courseCategory"></div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-12">Slug</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="slug"
                                       placeholder="Slug"
                                       id="slug"></div>
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection