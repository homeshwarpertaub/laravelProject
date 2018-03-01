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
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                        <form action="{{ route('logout')}}" method="POST" id="logout-form" style="display:none;">
                            {{csrf_field()}}
                        </form></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- Search input-group this is only view in mobile -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                </div>
                <!-- /Search input-group this is only view in mobile -->
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Users<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('user.create') }}">Create Users</a></li>
                    <li><a href="{{ route('user.index') }}">View Users</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Courses<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('course.create') }}">Create Course</a></li>
                    <li><a href="{{ route('course.index') }}">View Course</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Category<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('category.create') }}">Create Category</a></li>
                    <li><a href="{{ route('category.index') }}">View Category</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Roles<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('role.create') }}">Create Roles</a></li>
                    <li><a href="{{ route('role.index') }}">View Roles</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect "><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i>
                    <span class="hide-menu">Permissions<span class="fa arrow"></span><span
                                class="label label-rouded label-purple pull-right">2</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('permission.create') }}">Create Permissions</a></li>
                    <li><a href="{{ route('permission.index') }}">View Permissions</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Left navbar-header end -->
