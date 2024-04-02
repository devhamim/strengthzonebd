@extends('frontend.layout.app')

@section('content')
<!-- Start main-content -->
<section class="page-title" style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="title-outer">
            <h1 class="title">Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!-- Services Section Four -->
<section class="services-section-four bg-silver-light">
    <div class="auto-container">

        <div class="row">
            <!-- Service Block Four -->
            @foreach ($services as $service)
            <div class="service-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><a><img src="{{ asset('uploads/service') }}/{{ $service->image }}" alt=""></a></figure>
                    </div>
                    <div class="content-box">
                        <i class="icon "><img src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt=""></i>
                        <h5 class="title"><a>{{ $service->title }}</a></h5>
                        <div class="text">{{ $service->sort_desp }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
<!--End services-section Two-->
@endsection