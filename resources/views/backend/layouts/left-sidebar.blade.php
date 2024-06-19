<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Shipments</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html">Pending</a></li>
                        <li><a href="layouts-light-sidebar.html">Completed</a></li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Width</a></li>
                        <li><a href="layouts-preloader.html">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                    </ul>
                </li> --}}

                <li class="menu-title">Apps</li>

                <li>
                    <a href="{{route('shipments')}}" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Shipments</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html">
                            <span class="badge badge-pill badge-success float-right">New</span>
                            <span>Pending</span> </a></li>
                        <li><a href="layouts-light-sidebar.html">Completed</a></li>
                    </ul>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>