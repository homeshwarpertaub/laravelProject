<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/plugins/images/favicon.png')}}">
<title>@yield('title')</title>
<!-- Bootstrap Core CSS -->
<link href="{{asset('admin/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
<!-- Menu CSS -->
<link href="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
<!-- toast CSS -->
<link href="{{asset('admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
<!-- color CSS -->
<link href="{{asset('admin/css/colors/default-dark.css')}}" id="theme" rel="stylesheet">


<link rel="stylesheet" href="{{asset('admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css')}}" />
@section('headSection')
    @show

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o)
            , m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
</script>
