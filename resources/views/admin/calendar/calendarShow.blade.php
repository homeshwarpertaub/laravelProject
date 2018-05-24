@extends('admin.layouts.app')
@section('title','View Calendar')
@section('activecoursecreate','active')

@section('headSection')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>

@endsection

@section('main-content')
    <div class="container-fluid">

        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title">
                        View Calendar
                    </h3>
                    <div id='calendar'></div>
                    <a href="{{ route('applicant.calendar') }}">SHOW</a>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('footerSection')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($events as $event)
                    {
                        title : '{{ ucfirst($event->name) }}',
                        start : '{{ $event->task_date }}'
{{--                        url : '{{ route('calendar.edit', $event->id) }}'--}}
                    },
                    @endforeach
                ],
                eventBorderColor: '#fff'
            })
        });
    </script>



@endsection