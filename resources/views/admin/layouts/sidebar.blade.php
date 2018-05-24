<!-- Left navbar-sidebar -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">

        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{{asset('admin/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle">
                </div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">{{Auth::user()->name}}<span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                        <form action="{{ route('logout')}}" method="POST" id="logout-form" style="display:none;">
                            {{csrf_field()}}
                        </form></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">

            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li class="@yield('activeadminhome')"><a href="{{route('admin.home')}}">Home</a></li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Permissions<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activepermissionview')"><a href="{{ route('permission.index') }}">View Permissions</a></li>
                    <li class="@yield('activepermissioncreate')"><a href="{{ route('permission.create') }}">Create Permissions</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Roles<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activerolesview')"><a href="{{ route('role.index') }}">View Roles</a></li>
                    <li class="@yield('activerolescreate')"><a href="{{ route('role.create') }}">Create Roles</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Admin<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activeadminview')"><a href="{{ route('user.index') }}">View Admins</a></li>
                    <li class="@yield('activeadmincreate')"><a href="{{ route('user.create') }}">Create Admin</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Category<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activecatview')"><a href="{{ route('category.index') }}">View Category</a></li>
                    <li class="@yield('activecatcreate')"><a href="{{ route('category.create') }}">Create Category</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Courses<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activecourseview')"><a href="{{ route('course.index') }}">View Course</a></li>
                    <li class="@yield('activecoursecreate')"><a href="{{ route('course.create') }}">Create Course</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Applicants<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activeapplicantsview')"><a href="{{ route('admin-applicants.index') }}">View Applicants</a></li>
                    <li class="@yield('activeeditapplicants')"><a href="#">Edit Applicants</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Calendar<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li class="@yield('activecalendarview')"><a href="{{ route('calendar.index') }}">View Calendar</a></li>
                    <li class="@yield('activeeditcalendar')"><a href="{{ route('calendar.create') }}">Edit Calendar</a></li>
                </ul>
            </li>



        </ul>
    </div>
</div>
<!-- Left navbar-header end -->
