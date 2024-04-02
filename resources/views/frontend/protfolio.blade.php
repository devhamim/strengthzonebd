@extends('frontend.layout.app')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<h2>Portfolio</h2>
					<div class="text">Fitness is not a destination it is a way of life.</div>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{ url('/') }}">home</a></li>
						<li>Portfolio</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Portfolio Page Section -->
	<section class="portfolio-page-section">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/1.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/2.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/3.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/4.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/5.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/6.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/7.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/8.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Gallery Block -->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{ asset('frontend') }}/images/gallery/9.jpg" alt="" />
							<div class="content">
								<div class="content-inner">
									<h6><a href="portfolio-detail.html">Cardio Program</a></h6>
									<a href="portfolio-detail.html" class="icon fa fa-arrow-circle-o-right"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Post Share Options -->
			{{-- <div class="pagination-outer text-center">
				<div class="styled-pagination text-center">
					<ul class="clearfix">
						<li class="prev"><a href="#"><span class="fa fa-angle-double-left"></span> Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li class="active"><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">Next <span class="fa fa-angle-double-right"></span></a></li>
					</ul>
				</div>
			</div> --}}

		</div>
	</section>
	<!-- End Portfolio Page Section -->

	<!-- Subscribe Section -->
	{{-- <section class="subscribe-section">
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
	</section> --}}
	<!-- End Subscribe Section -->

@endsection
