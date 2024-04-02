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
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>Total Enroll</h6>
                        <h4 class="instructor-text-success">{{ $coursesCount }}</h4>
                        {{-- <p>Earning this month</p> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>STUDENTS ENROLLMENTS</h6>
                        <h4 class="instructor-text-info">12,000</h4>
                        <p>New this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card instructor-card w-100">
                <div class="card-body">
                    <div class="instructor-inner">
                        <h6>COURSES RATING</h6>
                        <h4 class="instructor-text-warning">4.80</h4>
                        <p>Rating this month</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="settings-widget">
                <div class="settings-inner-blk p-0">
                    <div class="sell-course-head comman-space">
                        <h3>Best Selling Courses</h3>
                    </div>
                    <div class="comman-space pb-0">
                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                            <table class="table table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>COURSES</th>
                                        <th>Videos</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td>
                                            <div class="sell-table-group d-flex align-items-center">
                                                <div class="sell-group-img">
                                                    <a href="{{ route('student.course.details', $course->id) }}">
                                                        <img width="50%" src="{{ asset('uploads/course') }}/{{ $course->rel_to_course->image }}"
                                                            class="img-fluid " alt>
                                                    </a>
                                                </div>
                                                <div class="sell-tabel-info">
                                                    <p>
                                                        <a href="{{ route('student.course.details', $course->id) }}">{{ $course->rel_to_course->title }}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $courseVideoCount }}</td>
                                        <td>{{ $course->rel_to_course->total }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
