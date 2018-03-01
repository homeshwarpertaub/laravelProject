<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title')</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="{{  asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="{{ asset('user/css/mdb.min.css') }}" rel="stylesheet">
<!-- Your custom styles (optional) -->
<link href="{{asset('user/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />


<link href="{{asset('css/app.css')}}" rel="stylesheet">


{{-- jquery ui css--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<!--if you want to put something more here manually
{{--@section('head')--}}
    {{--@show--}}
-->

@section('header')
    @show