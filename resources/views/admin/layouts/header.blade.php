<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('admin-dashboard')}}">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                    <!-- Light Logo icon -->
                    <!-- <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                    <h3>प्रदेश सभा सचिवालय</h3>
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                    <!-- dark Logo text -->
                    <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                    <!-- Light Logo text -->
                    <!-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> -->
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                        href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item hidden-xs-down search-box"> <a
                        class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                            class="fa fa-search"></i></a>
                    <form class="app-search">
                        <input type="text" class="form-control" placeholder="Search & enter"> <a
                            class="srh-btn"><i class="fa fa-times"></i></a></form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="hidden-md-down">{{Auth::user()->name}} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY ">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                   
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            
                            <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                
            </ul>
        </div>
    </nav>
</header>