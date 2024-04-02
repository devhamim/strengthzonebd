@extends('frontend.layout.app')

@section('content')

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">Gallery</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- Projects Section -->
	<section class="">
		<div class="container pb-80">

			<div class="outer-box">
				<div class="row">
					<!-- Project Block -->
					@foreach ($gallerys as $gallery)
					<div class=" project-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image">
									<a class="my-image-links" data-maxwidth="50%" data-gall="gallery01" href="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"><img src="{{ asset('uploads/gallery') }}/{{ $gallery->image }}"></a>
								</figure>

							</div>
							<div class="content-box">
								<a class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
								<span class="cat">{{ $gallery->address }}</span>
								<h4 class="title"><a title="">{{ $gallery->title }}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!--End projects-section-->
@endsection


