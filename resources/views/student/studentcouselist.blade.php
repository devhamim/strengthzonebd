@extends('student.layout.app')

@section('content')
<div class="col-xl-3 col-md-4 theiaStickySidebar">
    <div class="settings-widget dash-profile mb-3">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="{{ asset('student') }}/img/profile-bg.jpg" alt>
                <div class="profile-img">
                    <a ><img src="{{ asset('student') }}/img/user/user11.jpg" alt></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a>{{ Auth::guard('customerlogin')->user()->name }}</a></h4>
                    <p>Student</p>
                </div>
            </div>
        </div>
    </div>
    <div class="settings-widget account-settings">
        <div class="settings-menu">
            <h3>ACCOUNT</h3>
            <ul>
                <li class="nav-item {{ Request::is('student/dashboard')?'active':'' }}">
                    <a href="{{ route('student.dashboard') }}" class="nav-link">
                        <i class="feather-calendar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item {{ Request::is('student/edit')?'active':'' }}">
                    <a href="{{ route('student.edit') }}" class="nav-link">
                    <i class="feather-settings"></i> Edit Profile
                    </a>
                </li>
                <li class="nav-item {{ Request::is('student/couse/list')?'active':'' }}">
                    <a href="{{ route('student.couse.list') }}" class="nav-link">
                        <i class="feather-calendar"></i> Course List
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('customer.logout') }}" class="nav-link">
                        <i class="feather-power"></i> Sign Out
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
<div class="col-xl-9 col-lg-8 col-md-12">
    <div class="row">
        @forelse ($courses as $course)
        <div class="col-xl-4 col-lg-4 col-md-6 d-flex">
            <div class="course-box course-design d-flex ">
                <div class="product">
                    <div class="product-img">
                        <a href="{{ route('student.course.details', $course->id) }}">
                            <img class="img-fluid" alt
                                src="{{ asset('uploads/course') }}/{{ $course->rel_to_course->image }}">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="{{ route('student.course.details', $course->id) }}">{{ $course->rel_to_course->title }}</a></h3>
                        <p>{{ $course->rel_to_course->category }}</p>
                        <div class="start-leason d-flex align-items-center">
                            <a href="{{ route('student.course.details', $course->id) }}" class="btn btn-primary">Start
                                Lesson</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-xl-4 col-lg-4 col-md-6 d-flex mt-3">
            <h3>Course not found</h3>
        </div>
        @endforelse
    </div>
</div>
@endsection
