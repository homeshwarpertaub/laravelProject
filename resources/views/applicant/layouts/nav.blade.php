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
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('applicant.viewCourses') }}">Courses</a>

                    </li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Apply</a></li>
                        @else
                            <a class="nav-link" href="{{ route('apply.index') }}">
                                Apply
                            </a>
                            @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline" action="{{ route('applicant.viewCourses') }}">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                           name="search_course" id="search_course">
                </form>


                <ul class="navbar-nav pull-right">
                    @guest
                        <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
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






