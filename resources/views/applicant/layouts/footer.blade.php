<!--Footer-->
<!--Footer-->
<!--Footer-->
<footer class="page-footer center-on-small-only unique-color-dark pt-0">

    <div style="background-color: #6351ce;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0" href="https://www.facebook.com/ankush.pertaub.3"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic" href="https://www.linkedin.com/in/homeshwar-pertaub-b3608a134/"><i class="fa fa-linkedin white-text mr-lg-4"> </i></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                <h6 class="title font-bold"><strong>About My University</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Inspiring our students; broadening understanding and horizons. We will be a leading university for
                    expanding higher education opportunities: inspiring our diverse student body to achieve ambitious
                    goals and broadening understanding and horizons across the communities we engage.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                <h6 class="title font-bold"><strong>What We Offer</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Courses</a></p>
                <p><a href="#!">Apply Online</a></p>
                <p>Sms Notifications</p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                <h6 class="title font-bold"><strong>Useful links</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="https://www.16personalities.com/free-personality-test">Personality Test</a></p>
                <p><a href="https://www.popsci.com/">Popular Science</a></p>
                <p><a href="https://brightside.me/">BrightSide</a></p>
                <p><a href="#!">Help</a></p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fa fa-home mr-2"></i> Port Louis, Mauritius</p>
                <p><i class="fa fa-envelope mr-2"></i> homeshwarpertaub@gmail.com</p>
                <p><i class="fa fa-phone mr-2"></i> + 230 5964 6979</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017-{{Carbon\carbon::now()->year}} Copyright: <a target="_blank" href="https://www.linkedin.com/in/homeshwar-pertaub-b3608a134/"><strong> Homeshwar Pertaub</strong></a>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->

<!--/.Footer-->
<!--/.Footer-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>

<script type="text/javascript" src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('user/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('user/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('user/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('user/js/jquery.validate.min.js')}}" type="text/javascript"></script>

{{--jquery ui js--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script>
    $(function () {

        $("#search_course").autocomplete({
            source: '{{url('search')}}',
            classes: {
                "ui-autocomplete": "highlight"
            }
        });
    });


</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

@section('userFooter')
@show