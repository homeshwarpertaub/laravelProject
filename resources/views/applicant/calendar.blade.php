@extends('applicant/app')
@section('title','Home Page - My University')
@section('activehome','active')
@section('main-content')
    <main class="text-center">
        <div class="container">
            <div id="calendar"></div>

        </div>
    </main>

@endsection
@section('userFooter')
    <script>
        $(document).ready(function () {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: [
                        @foreach($events as $event)
                    {
                        title: '{{ ucfirst($event->name) }}',
                        start: '{{ $event->task_date }}'
                        {{--                        url : '{{ route('calendar.edit', $event->id) }}'--}}
                    },
                    @endforeach
                ],
                eventBorderColor: '#fff'
            })
        });
    </script>
@endsection