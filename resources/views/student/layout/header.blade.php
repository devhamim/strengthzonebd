<header class="header header-page">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
            <div class="container ">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{url('/')}}" class="navbar-brand logo">
                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{url('/')}}" class="menu-logo">
                            <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li ><a href="{{ route('about.us') }}">About</a></li>
                        <li><a href="{{ route('courses') }}">Courses</a></li>
                        <li><a href="{{ route('our.portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('our.blog') }}">Blog</a></li>
                        <li><a href="{{ route('contect') }}">Contact us</a></li>
                        {{-- <li class="login-link">
                            <a href="login.html">Login / Signup</a>
                        </li> --}}
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item user-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ asset('student') }}/img/user/user11.jpg" alt>
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="users dropdown-menu dropdown-menu-right"
                            data-popper-placement="bottom-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('student') }}/img/user/user11.jpg" alt="User Image"
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    {{-- <h6>{{ Auth::guard('customerlogin')->user()->name }}</h6> --}}
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                            </div>
                            {{-- <a class="dropdown-item" href="setting-edit-profile.html"><i
                                    class="feather-user me-1"></i> Profile</a>
                            <a class="dropdown-item" href="setting-student-subscription.html"><i
                                    class="feather-star me-1"></i> Subscription</a>
                            <div class="dropdown-item night-mode">
                                <span><i class="feather-moon me-1"></i> Night Mode </span>
                                <div class="form-check form-switch check-on m-0">
                                    <input class="form-check-input" type="checkbox" id="night-mode">
                                </div>
                            </div> --}}
                            <a class="dropdown-item" href="{{ route('customer.logout') }}"><i class="feather-log-out me-1"></i>
                                Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
