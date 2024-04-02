@extends('frontend.layout.app')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Success</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Success</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!--Error Section-->
    <section class="error-section">
    	<div class="auto-container">
        	<div class="content">
            	<h2 class="text-success">Success</h2>
                <h3>You have enrolled Successfully please check your email to login your account</h3>
                <div class="text">We provide your account details in your email with in 1 hour your account will be active</div>
				<a href="{{ route('courses') }}" class="theme-btn btn-style-three" type="submit"><span class="txt">See More</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->

@endsection
