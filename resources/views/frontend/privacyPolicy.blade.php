@extends('frontend.layout.app')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Privacy Policy</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Privacy Policy</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->


	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-lg-12 col-12">
                    <p>{!! $privacyPolicy->first()->description !!}</p>
                </div>
			</div>
		</div>
	</div>

@endsection
