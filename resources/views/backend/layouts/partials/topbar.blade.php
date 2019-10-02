<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="{{asset('/')}}" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        {{--<img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>--}}
                        {{--<!-- Light Logo icon -->--}}
                        {{--<img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>--}}

                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                                <!-- dark Logo text -->
                        {{--<img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo"/>--}}
                        {{--<!-- Light Logo text -->--}}
                        {{--<img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"--}}
                        {{--alt="homepage"/>--}}
                        <span style="display: inline-block; color: #ffffff; margin-top: 3px; font-weight: bold">E-Change</span>
                            </span>
                </a>
                <a class="sidebartoggler d-none d-lg-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none" href="javascript:void(0)" data-toggle="collapse"
               data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block"><i data-feather="sidebar"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Taux du jour</a>
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<div class="dropdown-divider"></div>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- mega menu -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End mega menu -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    @if(auth()->check())
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href=""
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 font-normal d-none d-sm-inline-block pro-name"><span>Hello,</span>
                                    {{auth()->user()->name}} </span>


                            @if(auth()->user()->profile->pic == null)
                                <img class="rounded-circle"
                                     width="40" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                     alt="user-img"
                                >
                            @else
                                <img class="rounded-circle"
                                     width="40" src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                     alt="user-img">
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="d-flex no-block align-items-center p-3 bg-light mb-2">
                                <div class="">

                                    @if(auth()->user()->profile->pic == null)
                                        <img class="rounded-circle"
                                             width="60" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                             alt="user-img"
                                        >
                                    @else
                                        <img class="rounded-circle"
                                             width="60"
                                             src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                             alt="user-img">
                                    @endif
                                </div>
                                <div class="ml-2">
                                    <h4 class="mb-0">  {{auth()->user()->name}}</h4>
                                    <p class="mb-0">  {{auth()->user()->email}}</p>
                                    @if(auth()->user()->profile->phone != null)
                                        <p class="mb-0">  {{auth()->user()->profile->phone}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="profile-dis scrollable">
                                <a class="dropdown-item" href="{{asset('account-settings')}}">
                                    <i class="ti-settings mx-1"></i> Paramètres du compte</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{asset('logout')}}">
                                    <i class="fa fa-power-off mx-1"></i> Déconnection</a>
                            </div>
                        </div>

                    @else
                        <a class="nav-link waves-effect waves-dark pro-pic" href="{{asset('login')}}">LogIn</a>
                    @endif
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notifications -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Notifications -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>