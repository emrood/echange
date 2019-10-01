<header class="topbar position-relative">
    <div class="container">
        <!-- Start Header -->
        <div class="header p-t-20">
            <nav class="navbar navbar-expand-md navbar-light px-0">
                <a class="navbar-brand" href="{{asset('/')}}">
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="logo">
                    <span class="ml-2">
                                <img src="{{asset('assets/images/logo-text.png')}}" align="logo">
                            </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('blogs')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{asset('sample')}}">Sample Page</a>
                        </li>
                        <li class="nav-item dropdown ">
                            @if(auth()->check())
                                <a class="nav-link py-0 dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                <span class="mr-3 font-normal d-none d-sm-inline-block pro-name"><span>Hello,</span>
                                    {{auth()->user()->name}}</span>

                                    @if(auth()->user()->profile->pic == null)
                                        <img  class="rounded-circle"
                                              width="40" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                              alt="user-img"
                                        >
                                    @else
                                        <img class="rounded-circle"
                                             width="40" src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                             alt="user-img">
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right py-0 user-dd animated flipInY">
                                    <div class="d-flex no-block align-items-center p-3 bg-light mb-2">
                                        <div class="">

                                            @if(auth()->user()->profile->pic == null)
                                                <img  class="rounded-circle"
                                                      width="60" src="{{asset('storage/uploads/users/no_avatar.jpg')}}"
                                                      alt="user-img"
                                                >
                                            @else
                                                <img class="rounded-circle"
                                                     width="60" src="{{asset('storage/uploads/users/'.auth()->user()->profile->pic)}}"
                                                     alt="user-img">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <h4 class="mb-0">  {{auth()->user()->name}}</h4>
                                            <p class="mb-0">  {{auth()->user()->email}}</p>
                                        </div>
                                    </div>
                                    <div class="profile-dis scrollable">
                                        <a class="dropdown-item" href="{{'/dashboard'}}">
                                            <i class="fa fa-dashboard mx-1"></i> My Dashboard</a>
                                        <a class="dropdown-item" href="{{asset('logout')}}">
                                            <i class="fa fa-power-off mx-1"></i> Logout</a>
                                    </div>
                                </div>

                            @else
                                <a class="nav-link waves-effect waves-dark pro-pic" href="{{asset('login')}}" >LogIn</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Header -->
    </div>
</header>
