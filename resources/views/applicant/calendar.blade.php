@extends('applicant/app')
@section('title','Calendar - My University')
@section('activecalendar','active')
@section('main-content')
    <main class="text-center">
        <div class="container jumbotron bg-elegant">
            <div id="calendar" class="purple-text bg-light animated flipInY"></div>

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
                eventBorderColor: 'purple',
                eventTextColor: 'white',
            })
        });
    </script>
@endsection