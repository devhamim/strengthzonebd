@extends('frontend.layout.app')

@section('content')
<div class="xs-sidebar-group info-group">

    <div class="xs-overlay xs-bg-black"></div>

    <div class="xs-sidebar-widget">

        <div class="sidebar-widget-container">

            <div class="widget-heading">

                <a href="#" class="close-side-widget">

                    X

                </a>

            </div>

            <div class="sidebar-textwidget">



                <!-- Sidebar Info Content -->

                <div class="sidebar-info-contents">

                    <div class="content-inner">

                        <div class="logo">

                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="" /></a>

                        </div>

                        <div class="content-box">

                            <h2>About Us</h2>

                            <p class="text">{{ $setting->first()->about }}</p>
                        </div>

                        <div class="contact-info">

                            <h2>Contact Info</h2>

                            <ul class="list-style-one">

                                <li><span class="icon fa fa-location-arrow"></span>{{ $setting->first()->address }}</li>

                                <li><span class="icon fa fa-phone"></span>{{ $setting->first()->number }}</li>

                                <li><span class="icon fa fa-envelope"></span>{{ $setting->first()->email }}</li>

                                <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday:
                                    Closed</li>

                            </ul>

                        </div>

                        <!-- Social Box -->

                        <ul class="social-box">

                            <li class="facebook"><a href="{{ $setting->first()->facebook }}" target="_blanck" class="fa fa-facebook-f"></a></li>

                            <li class="twitter"><a href="{{ $setting->first()->youtube }}" target="_blanck" class="fa fa-youtube"></a></li>

                            <li class="linkedin"><a href="{{ $setting->first()->linkedin }}" target="_blanck" class="fa fa-linkedin"></a></li>

                            <li class="instagram"><a href="{{ $setting->first()->instagram }}" target="_blanck" class="fa fa-instagram"></a></li>

                        </ul>

                    </div>

                </div>



            </div>

        </div>

    </div>

</div>
<!-- END sidebar widget item -->
<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                @foreach ($banners as $banner)
                <li data-description="Slide Description" data-easein="default" data-easeout="default"
                    data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688"
                    data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default"
                    data-thumb="{{ asset('uploads/banner') }}/{{ $banner->image }}" data-title="Slide Title"
                    data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                        data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                        src="{{ asset('uploads/banner') }}/{{ $banner->image }}">



                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="shape" data-height="auto" data-whitespace="nowrap"
                        data-width="['660','1000','750','550']" data-hoffset="['50','15','15','15']"
                        data-voffset="['65','65','65','65']" data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        <div class="border-curve"></div>

                    </div>



                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="shape" data-height="auto" data-whitespace="nowrap"
                        data-width="['660','1000','750','550']" data-hoffset="['15','15','15','15']"
                        data-voffset="['-70','-70','-130','-130']" data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        <div class="title">BE STRONG, BE HELTHY</div>

                    </div>



                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['660','1000','750','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['10','10','-40','-60']" data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        <h1>Strength Zone</h1>

                    </div>



                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['660','1000','750','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['95','95','55','20']" data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        <div class="text">It's time to Change</div>

                    </div>



                    <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                        data-type="text" data-height="none" data-width="['660','1000','750','550']"
                        data-whitespace="normal" data-hoffset="['15','15','15','15']"
                        data-voffset="['180','180','150','110']" data-x="['right','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-textalign="['top','top','top','top']"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                        <div class="btns-box">

                            <div class="btn-one-outer"><a href="{{ route('courses') }}"
                                    class="theme-btn btn-style-one"><span class="txt">Join Us
                                        Now</span></a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>



    <!-- Social Box -->

    <div class="social-box">

        <ul>
            <li class="share"><span class="icon fa fa-share"></span></li>

            <li><a href="{{ $setting->first()->facebook }}" target="_blanck" class="fa fa-facebook-f"></a></li>

            <li><a href="{{ $setting->first()->youtube }}" target="_blanck" class="fa fa-youtube"></a></li>

            <li><a href="{{ $setting->first()->instagram }}" target="_blanck" class="fa fa-instagram"></a></li>

            <li><a href="{{ $setting->first()->linkedin }}" target="_blanck" class="fa fa-linkedin"></a></li>

        </ul>
    </div>

</section>

<!--End Main Slider-->



<!-- Services Section -->

<section class="services-section">

    <div class="side-text">GYM</div>

    <div class="auto-container">

        <div class="row clearfix">



            <!-- Service Block -->

            <div class="service-block col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-tools-and-utensils"></span>

                    </div>

                    <h4><a href="classes-detail.html">Progression</a></h4>

                    <div class="text">The point of using Lorem Ipsum is that it has pi motive re-or-less for
                        normal distribution.</div>

                    <span class="big-icon flaticon-tools-and-utensils"></span>

                </div>

            </div>



            <!-- Service Block -->

            <div class="service-block style-two col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-sports"></span>

                    </div>

                    <h4><a href="classes-detail.html">Free Class</a></h4>

                    <div class="text">The point of using Lorem Ipsum is that it has pi motive re-or-less for
                        normal distribution.</div>

                    <span class="big-icon flaticon-sports"></span>

                </div>

            </div>



            <!-- Service Block -->

            <div class="service-block style-three col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-plan"></span>

                    </div>

                    <h4><a href="classes-detail.html">Diabetes Free Class</a></h4>

                    <div class="text">The point of using Lorem Ipsum is that it has pi motive re-or-less for
                        normal distribution.</div>

                    <span class="big-icon flaticon-plan"></span>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- About Section -->



<!-- About Section -->

<section class="about-section">

    <div class="auto-container">

        <div class="row clearfix">



            <!-- Content Column -->

            <div class="content-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">

                    <!-- Sec Title -->

                    <div class="sec-title">

                        <div class="title">Fitness All About</div>

                        <h2 style="font-size: 30px">Strength Zone এর মাধ্যমে আমরা কি কি Benefit পারেন?</h2>

                    </div>

                    {{-- <div class="red-text">Kick your feet up! With a gym designed around you, <br> we think you’ll love
                        it here.</div>

                    <div class="text">Our state of the art gyms provide you with a great place to work out in,
                        whether you are there to burn off some calories or are training for something more specific. Why
                        not visit your nearest Gym Center and take a look? We’re here to help you!</div> --}}

                    <!-- Featured Block -->

                    {{-- <div class="featured-block">

                    <div class="block-inner">

                        <span class="icon flaticon-people"></span>

                        <strong>Free Fitness Training</strong>

                        <div class="feature-text">Train with the best experts in bodybuilding field.</div>

                    </div>

                </div>



                <!-- Featured Block -->

                <div class="featured-block">

                    <div class="block-inner">

                        <span class="icon flaticon-stationary-bike"></span>

                        <strong>Cardio and Strength</strong>

                        <div class="feature-text">Our personal trainers will help you find a perfect workout.</div>

                    </div>

                </div> --}}

                    <ul class="accordion-box">
                        <!--Block-->
                        <li class="accordion block">

                            <div class="acc-btn">
                                <div class="icon-outer">
                                    <span class="icon icon-plus fa fa-plus"></span>
                                    <span class="icon icon-minus fa fa-minus"></span>
                                </div>Professional wayতে নিজেই Diet Chart তৈরী করতে পারবেন</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">আমরা আপনাকে diet Chart তৈরী করে দেব না। diet chart তৈরী করা শেখাবো। একজন Professional trainer যে ভাবে diet chart তৈরী করে আপনিও কিছু Secret tips এর মাধ্যমে নিজেই Same ভাবে Diet Chart তৈরী করবেন।
                                        এতে আপনি আপনার Friend/family member দের diet chart তৈরী করে Help করতে পারবেন।
                                        100% verified তথ্যের মাধ্যমে, আপনারা আমাদের যে কোন তথ্য Google মধ্যমে verify করতে পারবেন</div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">

                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span>
                                    </div>Nutrition সম্পর্কে সঠিক তথ্য</div>

                            <div class="acc-content">

                                <div class="content">

                                    <div class="text">macronutrients and micronutrients সম্পর্কে সঠিক তথ্য খুব সহজ ভাবে আলোচনা করা হবে,
                                        যা যে কোন শিক্ষাগত যোগ্যতা সম্পন্ন মানুষ খুব সহজ ভাবে বুঝতে পারবেন এবং লাইফে Apply করে Helpful হতে পারবেন।
                                        এছাড়াও,
                                        সঠিক mealtime Frequency, সঠিক পরিমাণ Water Consume, supplements নিয়ে scientific ভাবে আপনাদের ধারণা প্রদান করা হবে।
                                        যেন Diet Chart আপনি কোন Confusion  ছাড়াই তৈরী করতে পারেন।</div>

                                </div>

                            </div>

                        </li>



                        <!--Block-->

                        <li class="accordion block active-block">

                            <div class="acc-btn active">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span>
                                    </div>72% Productivity বৃদ্ধি</div>

                            <div class="acc-content current">

                                <div class="content">

                                    <div class="text">রিসার্চে প্রমানিত: আমরা যখন সঠিক Diet maintain করি তখন আমাদের Brain এর Productivity Frequently বাড়তে থাকে, সাধারণ মানুষের থেকে একজন স্বাস্থ্য সচেতন মানুষের Productivity 72% প্রযন্ত বৃদ্ধি হতে পারে।</div>
                                </div>
                            </div>
                        </li>



                        <!--Block-->

                        <li class="accordion block">

                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span>
                                    </div>Testosterone বৃদ্ধি</div>

                            <div class="acc-content">

                                <div class="content">

                                    <div class="text">আমরা Testosterone hormones বা Sex hormones নিয়ে অনেক সময় খুব সমস্যা Face করি। আমরা সঠিক খাবারের মধ্যমে Testosterone hormones বৃদ্ধি করতে পারি। Strength Zone আপনাকে Testosterone বৃদ্ধির খাবার সম্পর্কে সঠিক ধারণা প্রদান করবে। </div>

                                </div>

                            </div>

                        </li>



                        <!--Block-->

                        <li class="accordion block">

                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span
                                        class="icon icon-minus fa fa-minus"></span>
                                    </div>সুন্দর চেহারার Diet সম্পর্কে ধারনা</div>

                            <div class="acc-content">

                                <div class="content">

                                    <div class="text">আমরা সঠিক Diet and Workout এর মাধ্যমে আমাদের Face এ Collagen বৃদ্ধি করতে পারি।
                                        সঠিক Workout এর ফলে আমাদের face এ Oxygen Produce হয়।
                                        তাই সুন্দর চেহারায় Diet and Workout খুবই গুরুত্বপূর্ণ।
                                        Strength Zone আপনাকে সঠিক diet and Workout এ হেল্প করবে।</div>

                                </div>

                            </div>

                        </li>



                    </ul>


                </div>

            </div>



            <!-- Image Column -->

            <div class="image-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="award"><img src="{{ asset('frontend') }}/images/resource/award.png"
                            alt="" /></div>

                    <div class="image">

                        {{-- <img src="{{ asset('frontend') }}/images/resource/about-1.png" alt="" /> --}}

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- End About Section -->



<!-- Team Section -->

<section class="team-section">

    <div class="side-text">Trainer</div>

    <div class="auto-container">

        <!-- Sec Title -->

        <div class="sec-title light centered">

            <div class="title">Goal</div>

            <h2>10 year's journey</h2>

        </div>

        <div class="row clearfix">



            <!-- Team Block -->

            <div class="team-block col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="image">

                        <a ><img src="{{ asset('frontend') }}/images/resource/team-1.jpg" alt="" /></a>

                    </div>

                    <div class="content">

                        {{-- <div class="title">Crossfit Coach</div> --}}

                        <a class="name">2014</a>

                    </div>

                </div>

            </div>



            <!-- Team Block -->

            <div class="team-block col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="image">

                        <a><img src="{{ asset('frontend') }}/images/resource/team-2.jpg" alt="" /></a>

                    </div>

                    <div class="content">

                        {{-- <div class="title">Bodybuilding Coach</div> --}}

                        <a class="name">2018</a>

                    </div>

                </div>

            </div>



            <!-- Team Block -->

            <div class="team-block col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                    <div class="image">

                        <a><img src="{{ asset('frontend') }}/images/resource/team-3.jpg" alt="" /></a>

                    </div>

                    <div class="content">

                        {{-- <div class="title">Cardio & Conditioning</div> --}}

                        <a class="name">2024</a>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- End Team Section -->



<!-- Testimonials Section -->

<section class="testimonials-thumbs-carousel">

    <div class="auto-container">



        <!-- Carousel Wrapper -->

        <div id="carousel-thumb" class="carousel slide carousel-thumbnails" data-ride="carousel">

            <div class="row clearfix">



                <div class="carousel-column col-lg-6 col-md-12 col-sm-12">

                    <!-- Sec Title -->

                    <div class="sec-title">

                        <div class="title">Testimonial</div>

                        <h2>Reviews</h2>

                    </div>

                    <!-- Slides -->

                    <div class="carousel-inner" role="listbox">
                        @foreach ($customerSays as $key => $customerSay)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="testimonial-block">
                                    <div class="inner-box">
                                        <div class="title">{{ $customerSay->post }}</div>
                                        <h4>{{ $customerSay->name }}</h4>

                                        <div class="quote-icon flaticon-right-quote"></div>

                                        <div class="text">{!! $customerSay->description !!}</div>

                                    </div>

                                </div>

                            </div>
                        @endforeach
                    </div>

                    <!-- Slides -->

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carousel-thumb" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-thumb" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="pagers-column col-lg-6 col-md-12 col-sm-12">

                    <!-- Controls-->

                    <ol class="carousel-indicators">
                        @foreach ($customerSays as $key => $customerSay)
                            <li data-target="#carousel-thumb" data-slide-to="0" class="{{ $key == 0 ? 'active' : '' }}">
                                <div class="image"><img src="{{ asset('uploads/customersay') }}/{{ $customerSay->image }}" alt=""></div>
                            </li>
                        @endforeach
                    </ol>

                </div>



            </div>

        </div>



    </div>

</section>

<!-- End Testimonials Section -->



<!-- Video Section -->

<section class="video-section">

    <div class="side-text">Video</div>

    <div class="outer-container">
        <div class="inner-container">

            <!--Video Box-->

            <div class="video-box">

                <figure class="video-image">

                    <img src="{{ asset('frontend') }}/images/resource/video-img.jpg" alt="">

                </figure>

                <a href="https://www.youtube.com/watch?v=P5u5GIP7PVM&ab_channel=StrengthZone" class="lightbox-image overlay-box"><span
                        class="flaticon-play-arrow"><i class="ripple"></i></span></a>

            </div>
        </div>
    </div>
</section>

<!-- Video Section -->



<!-- Calculate Section -->

<section class="calculate-section">

    <div class="auto-container">

        <div class="row clearfix">



            <!-- Form Column -->

            <div class="form-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">

                    <!-- Sec Title -->

                    <div class="sec-title">

                        <div class="title">Body mass index</div>

                        <h2>What is your <br> Bmi</h2>

                    </div>



                    <!-- Default Form -->

                    <div class="default-form">



                        <!-- Default Form -->

                        <form method="post" action="https://expert-themes.com/html/gym/contact.html">

                            <div class="row clearfix">



                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                    <input type="text" name="cm" placeholder="185 Cm" required>

                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                    <input type="text" name="weight" placeholder="Weight / kg" required>

                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                    <input type="text" name="age" placeholder="Age" required>

                                </div>



                                <div class="form-group col-lg-6 col-md-6 col-sm-12">

                                    <select class="custom-select-box">

                                        <option>Gender</option>

                                        <option>Male</option>

                                        <option>Female</option>

                                    </select>

                                </div>



                                <div class="form-group col-lg-12 col-md-12 col-sm-12">

                                    <select class="custom-select-box">

                                        <option>Select an activity factor</option>

                                        <option>Factor 01</option>

                                        <option>Factor 02</option>

                                    </select>

                                </div>



                                <div class="form-group col-lg-12 col-md-12 col-sm-12">

                                    <div class="btn-two-outer"><button class="theme-btn btn-style-two"
                                            type="submit" name="submit-form"><span
                                                class="txt">Calculate</span></button></div>

                                </div>



                            </div>

                        </form>



                        <!--End Default Form -->

                    </div>



                </div>

            </div>



            <!-- Info Column -->

            <div class="info-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">



                    <div class="table-outer">

                        <div class="table-boxed">

                            <div class="table-content">

                                <!-- Title -->

                                <div class="title clearfix">

                                    <div class="col">BMI</div>

                                    <div class="col">WEIGHT STATUS</div>

                                </div>

                                <ul>

                                    <li class="clearfix"><span>Below 18.5</span>Underweight</li>

                                    <li class="clearfix"><span>18.5-24.9</span>Healthy</li>

                                    <li class="clearfix"><span>25.0-29.9</span>Overweight</li>

                                    <li class="clearfix"><span>30.0-and Above</span>Obese</li>

                                </ul>

                            </div>

                        </div>

                        <div class="info-list">

                            <div class="table-name"><span>BMR</span> - Metabolic Rate</div>

                            <div class="table-name"><span>BMI</span> - Body Mass Index</div>

                        </div>

                    </div>



                </div>

            </div>



        </div>

    </div>

</section>

<!-- End Calculate Section -->



<!-- TimeTable Section -->

{{-- <section class="timetable-section" style="background-image: url({{ asset('frontend') }}/background/1.jpg)">

    <div class="side-text">Trainer</div>

    <div class="auto-container">

        <!-- Sec Title -->

        <div class="sec-title light centered">

            <div class="title">Time Table</div>

            <h2>Working housr <br> & Classes</h2>

        </div>



        <div class="inner-container">

            <div class="table-outer">

                <div class="table-inner">

                    <!-- Table Title Box -->

                    <div class="table-title-box clearfix">

                        <div class="title">ALL EVENTS</div>

                        <div class="day">MONDAY</div>

                        <div class="day">TUESDAY</div>

                        <div class="day">WEDNESDAY</div>

                        <div class="day">THURSDAY</div>

                        <div class="day">FRIDAY</div>

                        <div class="day">SATURDAY</div>

                        <div class="day">SUNDAY</div>

                    </div>

                    <!-- Timetable Tabs-->

                    <div class="timetable-tabs tabs-box">



                        <!--Tab Btns-->

                        <ul class="tab-btns tab-buttons clearfix">

                            <li data-tab="#prod-cardio" class="tab-btn active-btn">CARDIO</li>

                            <li data-tab="#prod-crossfit" class="tab-btn">CROSSFIT</li>

                            <li data-tab="#prod-gym" class="tab-btn">GYM</li>

                            <li data-tab="#prod-powerlifting" class="tab-btn">POWERLIFTING</li>

                        </ul>



                        <!--Tabs Container-->

                        <div class="tabs-content">



                            <!--Tab / Active Tab-->

                            <div class="tab active-tab" id="prod-cardio">

                                <div class="content">

                                    <div class="clearfix">



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>



                            <!--Tab-->

                            <div class="tab" id="prod-crossfit">

                                <div class="content">

                                    <div class="clearfix">



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>



                            <!--Tab-->

                            <div class="tab" id="prod-gym">

                                <div class="content">

                                    <div class="clearfix">



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>



                            <!--Tab-->

                            <div class="tab" id="prod-powerlifting">

                                <div class="content">

                                    <div class="clearfix">



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Cardio Burn <span>MAdona FRON <br> 11:00 -
                                                        12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Crossfit Class <span>Madison fren <br>
                                                        11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">Power Lifting <span>Steve Cross <br> 11:00
                                                        - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">

                                                <div class="time">GYM OPEN <span>11:00 - 12:00</span></div>

                                            </div>

                                        </div>



                                        <!-- Time Box -->

                                        <div class="time-box">

                                            <div class="box-inner">



                                            </div>

                                        </div>



                                    </div>

                                </div>

                            </div>



                        </div>



                    </div>

                </div>

            </div>

        </div>



    </div>

</section> --}}

<!-- End TimeTable Section -->



<!-- News Section -->

<section class="news-section">

    <div class="auto-container">

        <!-- Sec Title -->

        <div class="sec-title centered">

            <div class="title">Our Blog & Artical</div>

            <h2>Latest News <br> Posts</h2>

        </div>

        <div class="row clearfix">
            <!-- News Block -->
            @foreach ($blogs->take(3) as $blog)
                <div class="news-block col-lg-4 col-md-6 col-sm-12">

                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="image">

                            <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}"
                                    alt="" /></a>

                            <div class="post-date">{{ $blog->created_at->format('d M Y') }}</span></div>

                        </div>

                        <div class="lower-content">

                            <h4><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h4>

                            <div class="text">{{ Str::limit(strip_tags($blog->description), 80, '...') }}</div>

                            <div class="btn-three-outer"><a href="{{ route('our.blog.details', $blog->slug) }}"
                                    class="theme-btn btn-style-three"><span class="txt">Read More</span></a>
                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>

</section>

<!-- End News Section -->



<!-- Contact Map Section -->

<section class="contact-map-section">

    <!-- Map Boxed -->

    <div class="map-boxed">

        <!--Map Outer-->

        <div class="map-outer">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s"
                height="550"></iframe>

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

                                {{ $setting->first()->address }}

                            </li>

                            <li>

                                <span class="icon flaticon-call-2"></span>

                                <strong>Contact</strong>

                                <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a>

                            </li>

                            <li>

                                <span class="icon flaticon-email-1"></span>

                                <strong>Email</strong>

                                <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>

                            </li>

                            </li>

                    </div>

                </div>

            </div>

        </div>

    </div>



</section>

<!-- End Contact Section -->



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

                    <div class="text">If you have any questions then feel free to message us we are contact you after that</div>

                </div>

            </div>



            <!-- Form Column -->

            <div class="form-column col-lg-8 col-md-12 col-sm-12">

                <div class="inner-column">

                    <!-- Default Form -->

                    <div class="default-form style-two">

                        <!-- Default Form -->

                        <form method="POST" action="{{ route('customerMessage.store') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Write message" required>{{ old('message') }}</textarea>
                                </div>



                                <div class="form-group clearfix col-lg-12 col-md-12 col-sm-12">

                                    <div class="btn-three-outer"><button class="theme-btn btn-style-three"
                                            type="submit"><span class="txt">SEND
                                                MESSAGE</span></button></div>

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

@endsection
