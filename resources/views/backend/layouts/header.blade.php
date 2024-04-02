<div class="header">
    <div class="row g-0 align-items-center">
        <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
            <div class="main-logo d-lg-block d-none">
                <div class="logo-big">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                    </a>
                </div>
                <div class="logo-small">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="nav-close-btn">
                <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
            </div>
            <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i class="fa-light fa-globe me-1"></i> <span>View Website</span></a>
        </div>
        <div class="col-4 d-lg-none">
            <div class="mobile-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                </a>
            </div>
        </div>
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
            <div class="header-right-btns d-flex justify-content-end align-items-center">
                <div class="header-collapse-group">
                    <div class="header-right-btns d-flex justify-content-end align-items-center p-0">

                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">



                            <button class="header-btn fullscreen-btn" id="btnFullscreen"><i class="fa-light fa-expand"></i></button>
                        </div>
                    </div>
                </div>
                <button class="header-btn header-collapse-group-btn d-lg-none"><i class="fa-light fa-ellipsis-vertical"></i></button>
                <div class="header-btn-box">
                    <button class="profile-btn" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('backend') }}/assets/images/admin.png" alt="image">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li>
                            <div class="dropdown-txt text-center">
                                <p class="mb-0">{{ $users->first()->name }}</p>
                                <span class="d-block">{{ $users->first()->email }}</span>
                            </div>
                        </li>

                        <li><a class="dropdown-item" href="{{ route('setting.index') }}"><span class="dropdown-icon"><i class="fa-regular fa-gear"></i></span> Settings</a></li>
                        <li>
                            <div class="">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
