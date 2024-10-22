<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg">

@include('theme.app.head')
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
    @include('theme.app.header')
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
            
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        @guest
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('web.dashboard') }}"  role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Menu Product</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.sortali') }}" class="nav-link" data-key="product"> Sortali </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.stola') }}" class="nav-link" data-key="product"> Stola </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.gantungankunci') }}" class="nav-link" data-key="product"> Gantungan Kunci </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endguest
                        @auth
                            @role('admin')
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}"  role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.main') }}" class="nav-link" data-key="Menu"> Menu </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- end Dashboard Menu -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Pages</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.order.index') }}" class="nav-link" data-key="Order"> Order </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @else
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('web.dashboard') }}"  role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Menu Product</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.sortali') }}" class="nav-link" data-key="product"> Sortali </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.stola') }}" class="nav-link" data-key="product"> Stola </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('web.product.gantungankunci') }}" class="nav-link" data-key="product"> Gantungan Kunci </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- end Dashboard Menu -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>


                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Pages</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">

                                        <li class="nav-item">
                                            <a href="{{ route('web.mainprofile') }}" class="nav-link" > Profile </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endrole
                        @endauth
                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                {{ $slot }}
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('theme.app.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->
    @include('theme.app.js')
    
</body>

</html>