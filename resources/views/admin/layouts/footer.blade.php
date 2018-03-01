<footer class="footer text-center"> 2017-{{Carbon\carbon::now()->year}} &copy; Homeshwar Pertaub </footer>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="{{asset('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('admin/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin/js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{asset('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('admin/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('admin/js/custom.min.js')}}"></script>
<script src="{{asset('admin/js/dashboard1.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.toast({
            heading: 'Welcome to Elite admin'
            , text: 'Use the predefined ones, or specify a custom position object.'
            , position: 'top-right'
            , loaderBg: '#ff6849'
            , icon: 'info'
            , hideAfter: 3500
            , stack: 6
        })
    });
</script>
<!--Style Switcher -->
<script src="{{asset('admin/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.textarea_editor').wysihtml5();
    });
</script>
@section('footerSection')
    @show


