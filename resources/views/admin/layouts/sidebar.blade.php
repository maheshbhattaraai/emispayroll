<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            @if(Auth::user())
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{route('admin-dashboard')}}" aria-expanded="false"><i
                            class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin-employee')}}" aria-expanded="false"><i
                            class="fa fa-user"></i><span class="hide-menu">Employee</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin-job-type')}}" aria-expanded="false"><i
                            class="fa fa-user"></i><span class="hide-menu">Job Type</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin-office-type')}}" aria-expanded="false"><i
                            class="fa fa-user"></i><span class="hide-menu">Office Type</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{route('admin-service')}}" aria-expanded="false"><i
                            class="fa fa-user"></i><span class="hide-menu">Services</span></a>
                </li>

            </ul>
            @endif
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
