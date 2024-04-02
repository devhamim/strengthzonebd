<div class="main-sidebar flush-menu">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item open">
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('index') }}" class="sidebar-link active"><span class="nav-icon"><i class="fa-light fa-grid-2"></i></span> <span class="sidebar-txt">Dashboard</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Apps</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('users.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-group"></i></span> <span class="sidebar-txt">All User</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('regstudent.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-group"></i></span> <span class="sidebar-txt">Register Student</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('course.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">Course</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('studentlist.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-plus-square"></i></span> <span class="sidebar-txt">Student List</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('banner.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-boxes"></i></span> <span class="sidebar-txt">Banner</span></a>
                    </li>
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('about.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-boxes"></i></span> <span class="sidebar-txt">About</span></a>
                    </li> --}}
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('team.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-tag"></i></span> <span class="sidebar-txt">Team</span></a>
                    </li> --}}
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('customerSay.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span> <span class="sidebar-txt">Customer Say</span></a>
                    </li>
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('client.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Clients</span></a>
                    </li> --}}
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('gallery.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Gallery</span></a>
                    </li> --}}
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('achieve.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-calendar"></i></span> <span class="sidebar-txt">Achieve</span></a>
                    </li> --}}
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('service.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Service</span></a>
                    </li>
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('pricing.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Pricing</span></a>
                    </li> --}}
                    {{-- <li class="sidebar-dropdown-item">
                        <a href="{{ route('portfolios.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span> <span class="sidebar-txt">Portfolio</span></a>
                    </li> --}}
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('blog.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Blog</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('customerMessage.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Customer Message</span></a>
                    </li>
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('privacyPolicy.index') }}" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-plus"></i></span> <span class="sidebar-txt">Privacy Policy</span></a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
