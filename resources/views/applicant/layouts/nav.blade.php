<style>
    main {
        padding-top: 3rem;
        padding-bottom: 2rem;
    }

    .navbar {
        background-color: #3b3b3f;
    }

    .navbar .btn-group .dropdown-menu a:hover {
        color: #000 !important;
    }

    .navbar .btn-group .dropdown-menu a:active {
        color: #fff !important;
    }
</style>

<!--Main Navigation-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand mr-3" href="{{ route('applicant.home') }}">My University</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @yield('activehome')">
                        <a class="nav-link" href="{{ route('applicant.home') }}">Home <span><i class="fa fa-home"
                                                                                               aria-hidden="true"></i></span>
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @yield('activecourses')">

                        <a class="nav-link" href="{{ route('applicant.allCourses') }}">Courses <span><i
                                        class="fa fa-institution" aria-hidden="true"></i></span></a>

                    </li>
                    @guest
                        <li class="nav-item @yield('activeapply')"><a class="nav-link" href="{{ route('login') }}">Apply <span><i
                                            class="fa fa-edit" aria-hidden="true"></i></span></a></li>
                        @else
                            <li class="nav-item @yield('activeapply')"><a class="nav-link" href="{{ route('apply.index') }}">
                                Apply <span><i
                                            class="fa fa-edit" aria-hidden="true"></i></span>
                                </a></li>
                            @endguest
                            <li class="nav-item @yield('activecontact')">
                                <a class="nav-link" href="#">Contact <span><i class="fa fa-envelope-open-o"
                                                                              aria-hidden="true"></i></span></a>
                            </li>

                            <li class="nav-item @yield('activehelp')">
                                <a class="nav-link" href="#">Help <span><i class="fa fa-info" aria-hidden="true"></i></span></a>
                            </li>
                            {{--  <li class="nav-item btn-group">
                                  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                     aria-haspopup="true" aria-expanded="false">Dropdown
                                  </a>
                                  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                  </div>
                              </li>--}}
                </ul>
                <ul class="navbar-nav pull-right">
                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}">Login <span><i class="fa fa-hand-peace-o"
                                                                                           aria-hidden="true"></i></span></a>
                        </li>
                        @else
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout <span><i class="fa fa-hand-spock-o" aria-hidden="true"></i></span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest

                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

</header>

<!--Main Navigation-->






