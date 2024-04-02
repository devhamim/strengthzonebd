@extends('frontend.layout.app')

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Our Courses</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Courses</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Classess Page Section -->
	<section class="classess-page-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Classess Block -->
                @foreach ($courses as $course)
                    <div class="classess-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('courses.details', $course->slug) }}"><img src="{{ asset('uploads/course') }}/{{ $course->image }}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <div class="title">{{ $course->category }}</div>
                                <h4><a href="{{ route('courses.details', $course->slug) }}">{{ $course->title }}</a></h4>
                                <div class="text">{{ Str::limit(strip_tags($course->description), 80, '...') }}</div>
                                <a class="read-more" href="{{ route('courses.details', $course->slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>
	<!-- End Classess Page Section -->


@endsection
