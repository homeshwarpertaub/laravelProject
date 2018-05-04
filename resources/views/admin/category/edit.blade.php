@extends('admin.layouts.app')
@section('title','Edit Category')
@section('activecatview','active')

@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        Course Category
                    </h3>
                    @include('includes.messages')

                    <form action="{{ route('category.update',$categories->id) }}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label for="courseCategory" class="col-md-12">Course Category</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="courseCategory"
                                       placeholder="Course Category"
                                       id="courseCategory" value="{{ $categories->category_name }}"></div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-12">Slug</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="slug"
                                       placeholder="Slug"
                                       id="slug" value="{{ $categories->slug }}"></div>
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection