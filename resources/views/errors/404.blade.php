@extends('frontend.layout.app')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Error 404</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>404</li>
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
            	<h1>404</h1>
                <h2>Oops! That page can’t be found</h2>
                <div class="text">Sorry, but the page you are looking for does not existing</div>
				<a href="index-2.html" class="theme-btn btn-style-three" type="submit"><span class="txt">Go to Home Page</span></a>
            </div>
        </div>
    </section>
    <!--End Error Section-->

	<!-- Subscribe Section -->
	<section class="subscribe-section">
		<div class="auto-container">
			<div class="inner-container margin-bottom">
				<div class="pattern-layer" style="background-image:url({{ asset('frontend') }}/images/background/7.jpg)"></div>
				<div class="section-image" style="background-image:url({{ asset('frontend') }}/images/resource/newslatter.png)"></div>
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>Don’t miss any updates <br> Get subscribed!</h3>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<div class="newsletter-form">
								<form method="post" action="https://expert-themes.com/html/gym/contact.html">
									<div class="form-group">
										<input type="email" name="email" value="" placeholder="Add your email ......" required="">
										<button type="submit" class="theme-btn submit-btn"><span class="txt">Subscribe</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Subscribe Section -->

@endsection
