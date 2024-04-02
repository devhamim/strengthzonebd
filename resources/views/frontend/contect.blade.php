@extends('frontend.layout.app')
@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">

    	<div class="auto-container">

			<div class="clearfix">

				<div class="pull-left">

					<h2>Contact Us</h2>

					<div class="text">Fitness is not a destination it is a way of life.</div>

				</div>

				<div class="pull-right">

					<ul class="page-breadcrumb">

						<li><a href="{{ url('/') }}">home</a></li>

						<li>Contact Us</li>

					</ul>

				</div>

			</div>

        </div>

    </section>
    <!--End Page Title-->

	<!-- Contact Form Section -->
	<section class="contact-form-section">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Contact Now</div>
							<h2>Ask Us <br> Anything</h2>
						</div>
						<div class="text">{{ $settings->first()->about }}</div>
					</div>
				</div>
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Default Form -->
						<div class="default-form style-two contact-form">
							<!-- Default Form -->
							<form method="POST" action="{{ route('customerMessage.store') }}">
                                @csrf
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="name" placeholder="Name" required>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="email" name="email" placeholder="Email" required>
									</div>



									<div class="col-lg-6 col-md-6 col-sm-12 form-group">

										<input type="text" name="subject" placeholder="Subject" required>

									</div>



									<div class="col-lg-6 col-md-6 col-sm-12 form-group">

										<input type="text" name="phone" placeholder="Phone" required>

									</div>



									<div class="form-group col-lg-12 col-md-12 col-sm-12">

										<textarea name="message" placeholder="Your Message write hear"></textarea>

									</div>



									<div class="form-group clearfix col-lg-12 col-md-12 col-sm-12">

										<div class="btn-three-outer"><button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span></button></div>

									</div>



								</div>

							</form>



							<!--End Default Form -->

						</div>



					</div>

				</div>



			</div>

		</div>

	</section>

	<!-- End Contact Form Section -->



	<!-- Contact Map Section -->

	<section class="contact-map-section">

		<!-- Map Boxed -->

		<div class="map-boxed">

			<!--Map Outer-->

			<div class="map-outer">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s" height="500" ></iframe>

			</div>

		</div>



		<div class="auto-container">

			<div class="map-info-boxed">

				<div class="clearfix">

					<!-- Column -->

					<div class="image-column col-lg-5 col-md-12 col-sm-12">

						<div class="image">

							<img src="{{ asset('frontend') }}/images/resource/info.jpg" alt="" />

						</div>

					</div>

					<!-- Column -->

					<div class="info-column col-lg-7 col-md-12 col-sm-12">

						<div class="inner-column">

							<ul>

								<li>

									<span class="icon flaticon-location-2"></span>

									<strong>Location</strong>
                                    @if ($settings->first()->address != null)
									{{ $settings->first()->address }}
                                    @endif

								</li>

								<li>

									<span class="icon flaticon-call-2"></span>

									<strong>Contact</strong>
                                    @if ($settings->first()->number != null)
									<a href="tel:{{ $settings->first()->number }}">{{ $settings->first()->number }}</a>
                                    @endif

								</li>

								<li>

									<span class="icon flaticon-email-1"></span>

									<strong>Email</strong>
                                    @if ($settings->first()->email != null)

									<a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a>
                                    @endif

								</li>

							</li>

						</div>

					</div>

				</div>

			</div>

		</div>



	</section>

	<!-- End Contact Section -->



@endsection
