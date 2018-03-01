<!doctype html>
<html lang="en">
<head>
@include('admin.layouts.head')
</head>
<body class="fix-sidebar">
<div id="wrapper">
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div id="page-wrapper">

    @section('main-content')
        @show

    @include('admin.layouts.footer')


</body>
</html>