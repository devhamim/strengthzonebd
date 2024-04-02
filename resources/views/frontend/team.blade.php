@extends('frontend.layout.app')
@section('content')
 <!-- Start main-content -->
 <section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Our Team</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>Team</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Team Section -->
<section class="team-section">
	<div class="bg bg-pattern-4"></div>
	<div class="auto-container">
		
		<div class="row">
			<!-- Team Block -->
			@foreach ($teams as $team)
			<div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
				<div class="inner-box">
					<div class="image-box">
						<figure class="image"><a><img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt=""></a></figure>
					</div>
					<div class="info-box">
						<h5 class="name"><a title="">{{ $team->name }}</a></h5>
						<span class="designation">{{ $team->post }}</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- End Team Section -->
@endsection