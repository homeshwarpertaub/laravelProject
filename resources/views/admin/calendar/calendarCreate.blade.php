@extends('admin.layouts.app')
@section('title','Create Calendar')
@section('activecoursecreate','active')

@section('headSection')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

@endsection

@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        Create Calendar Event
                    </h3>
                    <form action="{{ route('calendar.store') }}"  class="form-horizontal" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="eventName">Event Name: </label>
                            <input type="text" name="eventName" id="eventName" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="eventDescription">Event Description: </label>
                            <textarea name="eventDescription" id="eventDescription" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="startDate">Event Start Date: </label>
                            <input type="text" name="startDate" id="startDate" class="date form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footerSection')


    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>



@endsection

