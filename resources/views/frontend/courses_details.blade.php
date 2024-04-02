@extends('student.layout.app')

@section('content')


            <div class="breadcrumb-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="breadcrumb-list">
                                <nav aria-label="breadcrumb" class="page-breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Courses</li>
                                        <li class="breadcrumb-item" aria-current="page">All Courses</li>
                                        <li class="breadcrumb-item" aria-current="page">{{ $courses->title }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="inner-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="instructor-wrap border-bottom-0 m-0">

                                <span class="web-badge mb-3">{{ $courses->category }}</span>
                            </div>
                            <h2>{{ $courses->title }}</h2>
                            <p>{{ Str::limit(strip_tags($courses->description), 80, '...') }}</p>
                            <div class="course-info d-flex align-items-center border-bottom-0 m-0 p-0">
                                <div class="cou-info">
                                    <img src="assets/img/icon/icon-01.svg" alt>
                                    <p>{{ $course_video_count }} Videos</p>
                                </div>

                                <div class="cou-info">
                                    <img src="assets/img/icon/people.svg" alt>
                                    <p>students enrolled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="page-content course-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="card overview-sec">
                                <div class="card-body">
                                    <h5 class="subs-title">Overview</h5>
                                    <h6>Course Description</h6>
                                    <p>{!! $courses->description !!}</p>

                                </div>
                            </div>


                            <div class="card content-sec">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="subs-title">Course Content</h5>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <h6>{{ $course_video_count }} Videos</h6>
                                        </div>
                                    </div>
                                    <div class="course-card">
                                        <h6 class="cou-title">
                                            <a class="" >{{ $courses->title }}</a>
                                        </h6>
                                        <div  class="" style>
                                            <ul>
                                                @foreach ($course_video as $video)
                                                <li>
                                                    <p><img src="{{ asset('frontend') }}/img/icon/play.svg" alt class="me-2">{{ $video->title }}</p>
                                                    <div>
                                                        @if($video->status != 1)
                                                        <a width="300" height="150" target="_blanck" href="{{ asset($video->path) }}">Preview</a>

                                                        @else
                                                        <img src="{{ asset('student') }}/img/icon/lock.svg" alt="">
                                                        @endif
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4" style="padding-right: 0">
                            <div class="sidebar-sec">

                                <div class="video-sec vid-bg">
                                    <div class="card">
                                        <div class="card-body">
                                            <video width="100%" height="200" controls>
                                                <source src="{{ asset($course_video->first()->path) }}" type="video/mp4">
                                            </video>
                                            <div class="video-details">
                                                <div class="course-fee">
                                                    <h2>{{ $courses->total }}Tk</h2>
                                                    <p><span>{{ $courses->price }}Tk</span> {{ $courses->discount }}% off</p>
                                                </div>
                                                @auth('customerlogin')
                                                <a href="{{ route('course.checkout', $courses->slug) }}" class="btn btn-enroll w-100">Enroll Now</a>
                                                @else
                                                <a href="{{ route('customer.reglogin') }}" class="btn btn-enroll w-100">Enroll Now</a>
                                                @endauth

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card include-sec">
                                    <div class="card-body">
                                        <div class="cat-title">
                                            <h4>Includes</h4>
                                        </div>
                                        <ul>
                                            <li><img src="assets/img/icon/import.svg" class="me-2" alt> {{ $course_video_count }} video</li>
                                            <li><img src="assets/img/icon/key.svg" class="me-2" alt> Full lifetime
                                                access</li>
                                            <li><img src="assets/img/icon/mobile.svg" class="me-2" alt> Access on mobile
                                                and TV</li>
                                            <li><img src="assets/img/icon/cloud.svg" class="me-2" alt> Assignments</li>
                                        </ul>
                                    </div>
                                </div>


                                {{-- <div class="card feature-sec">
                                    <div class="card-body">
                                        <div class="cat-title">
                                            <h4>Includes</h4>
                                        </div>
                                        <ul>
                                            <li><img src="assets/img/icon/users.svg" class="me-2" alt> Enrolled:
                                                <span>32 students</span></li>
                                            <li><img src="assets/img/icon/timer.svg" class="me-2" alt> Duration:
                                                <span>20 hours</span></li>
                                            <li><img src="assets/img/icon/chapter.svg" class="me-2" alt> Chapters:
                                                <span>15</span></li>
                                            <li><img src="assets/img/icon/video.svg" class="me-2" alt> Video:<span> 12
                                                    hours</span></li>
                                            <li><img src="assets/img/icon/chart.svg" class="me-2" alt> Level:
                                                <span>Beginner</span></li>
                                        </ul>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
