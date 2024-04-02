@extends('frontend.layout.app')
@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
	<div class="auto-container">
		<div class="title-outer">
			<h1 class="title">Testimonial</h1>
			<ul class="page-breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li>Testimonial</li>
			</ul>
		</div>
	</div>
</section>
<!-- end main-content -->

<!-- Testimonial Section Two -->
<section class="testimonial-section-two">
	<div class="auto-container">

		<div class="carousel-outer">
			<div class="testimonial-carousel-two owl-carousel default-navs">
				<!-- Testimonial Block -->
				@foreach ($customerSays as $customer)
				<div class="testimonial-block-two">
					<div class="inner-box">
						<div class="content-box">
							<div class="text">{!! $customer->description !!}</div>
						</div>
						<div class="info-box pt-3">
							<figure class="thumb"><img src="{{ asset('uploads/customersay') }}/{{ $customer->image }}" alt=""></figure>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<h5 class="name">{{ $customer->name }}</h5>
							<span class="designation">{{ $customer->post }}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

	</div>
</section>

<section class="clients-section pull-up">
    <div class="auto-container">
        <!-- Sponsors Outer -->
        <div class="sponsors-outer">
            <!--clients carousel-->

            <ul class="clients-carousel owl-carousel owl-theme">
                @foreach ($clients as $client)
                    <li class="client-block"> <a ><img src="{{ asset('uploads/client') }}/{{ $client->image }}" alt=""></a> </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
@endsection