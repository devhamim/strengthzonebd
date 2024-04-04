@extends('student.layout.app')
@section('content')
<div class="page-content">
    <div class="container">
        <div class="row">

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


            <div class="col-xl-9 col-md-8">
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        {{-- <div class="profile-heading">
                            <h3>Profile Details</h3>
                            <p>You have full control to manage your own account setting.</p>
                        </div> --}}
                        {{-- <div class="course-group mb-0 d-flex">
                            <div class="course-group-img d-flex align-items-center">
                                <a href="student-profile.html"><img src="assets/img/user/user11.jpg" alt
                                        class="img-fluid"></a>
                                <div class="course-name">
                                    <h4><a href="student-profile.html">Your avatar</a></h4>
                                    <p>PNG or JPG no bigger than 800px wide and tall.</p>
                                </div>
                            </div>
                            <div class="profile-share d-flex align-items-center justify-content-center">
                                <a href="javascript:void(0);" class="btn btn-success">Update</a>
                                <a href="javascript:void(0);" class="btn btn-danger">Delete</a>
                            </div>
                        </div> --}}
                        <div class="checkout-form personal-address add-course-info ">
                            <div class="personal-info-head">
                                <h4>Personal Details</h4>
                                <p>Edit your personal information and address.</p>
                                @if (session('success'))
                                    <div class="text-success">{{ session('success') }}</div>
                                @endif
                            </div>
                            <form action="{{ route('student.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ Auth::guard('customerlogin')->user()->name }}" placeholder="Enter your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Number</label>
                                            <input type="text" class="form-control" name="number" value="{{ Auth::guard('customerlogin')->user()->number }}" placeholder="Enter your Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ Auth::guard('customerlogin')->user()->email }}"  placeholder="Enter your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ Auth::guard('customerlogin')->user()->address }}" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                            @error('password')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-block">
                                            <label class="form-control-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="update-profile">
                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
