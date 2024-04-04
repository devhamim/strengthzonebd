@extends('frontend.layout.app')

@section('content')


<!--Page Title-->

<section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/11.jpg)">

    <div class="auto-container">

        <div class="clearfix">

            <div class="pull-left">

                <h2>About Us</h2>

                <div class="text">Fitness is not a destination it is a way of life.</div>

            </div>

            <div class="pull-right">

                <ul class="page-breadcrumb">

                    <li><a href="{{ url('/') }}">home</a></li>

                    <li>About us</li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!--End Page Title-->



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

                        <img src="{{ asset('frontend') }}/images/resource/about-1.png" alt="" />

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- End About Section -->



<!-- Services Section Two -->

<section class="services-section-two mt-5">

    <div class="image-layer" style="background-image:url({{ asset('frontend') }}/images/background/8.jpg)"></div>

    <div class="auto-container">



        <div class="row clearfix">



            <!-- Service Block -->

            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-barbell"></span>

                    </div>

                    <span class="number">01</span>

                    <div class="title">Friendly Atmosphere</div>

                    <h4><a href="classes-detail.html">CARDIO PROGRAM</a></h4>

                    <div class="text">Make the muscles of your body larger and fit stronger through tension
                        and exercises such as lifting weights.</div>

                </div>

            </div>



            <!-- Service Block -->

            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-barbell"></span>

                    </div>

                    <span class="number">02</span>

                    <div class="title">Friendly Atmosphere</div>

                    <h4><a href="classes-detail.html">PURE STRENGTH</a></h4>

                    <div class="text">Make the muscles of your body larger and fit stronger through tension
                        and exercises such as lifting weights.</div>

                </div>

            </div>



            <!-- Service Block -->

            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">

                <div class="inner-box">

                    <div class="icon-box">

                        <span class="icon flaticon-barbell"></span>

                    </div>

                    <span class="number">03</span>

                    <div class="title">Friendly Atmosphere</div>

                    <h4><a href="classes-detail.html">POWER YOGA</a></h4>

                    <div class="text">Make the muscles of your body larger and fit stronger through tension
                        and exercises such as lifting weights.</div>

                </div>

            </div>



        </div>



    </div>

</section>

<!-- End Services Section Two -->



<!-- Newsletter Section -->

<section class="newsletter-section">

    <div class="auto-container">

        <div class="inner-container">

            <div class="pattern-layer" style="background-image:url({{ asset('frontend') }}/images/background/7.jpg)"></div>

            <div class="section-image" style="background-image:url({{ asset('frontend') }}/images/resource/newslatter.png)"></div>

            <div class="clearfix">



                <!-- Map Column -->

                <div class="map-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3619.888133484943!2d89.35901000000001!3d24.86767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDUyJzAzLjYiTiA4OcKwMjEnMzIuNCJF!5e0!3m2!1sen!2sbd!4v1712209584593!5m2!1sen!2sbd" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <a class="direction" href="">Get Direction <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>

                </div>



                <!-- Form Column -->

                <div class="form-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <span class="circle-one"></span>

                        <span class="circle-two"></span>

                        <h4>Location</h4>

                        <div class="newsletter-form">

                            @if ($setting->first()->email != null)
                                <h3><a class="text-white" href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></h3>
                            @endif

                        </div>

                        {{-- <div class="text">Register now and get the latest news & updates</div> --}}

                    </div>

                </div>



            </div>

        </div>

    </div>

</section>

<!-- End Subscribe Section -->



<!-- Benefits Section -->

<section class="benefits-section">

    <div class="side-image" style="background-image:url({{ asset('frontend') }}/images/resource/benefit-5.png)"></div>

    <div class="auto-container">

        <div class="row clearfix">



            <!-- Content Column -->

            <div class="content-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">

                    <!-- Sec Title -->

                    <div class="sec-title">

                        <div class="title">OUR BENEFITS</div>

                        <h2>EVERYTHING IS <br> POSSIBLE WITH US</h2>

                    </div>



                    <!-- Benefit Block -->

                    <div class="benefit-block">

                        <div class="block-inner">

                            <span class="icon flaticon-dumbbell"></span>

                            <strong>40 Courses a Week</strong>

                            <div class="feature-text">Everyday our entire team works to deliver you our skills,
                                knowledge and passion</div>

                        </div>

                    </div>



                    <!-- Benefit Block -->

                    <div class="benefit-block">

                        <div class="block-inner">

                            <span class="icon flaticon-fitness-2"></span>

                            <strong>35+ Professional Trainers</strong>

                            <div class="feature-text">Everyday our entire team works to deliver you our skills,
                                knowledge and passion</div>

                        </div>

                    </div>



                    <!-- Benefit Block -->

                    <div class="benefit-block">

                        <div class="block-inner">

                            <span class="icon flaticon-man"></span>

                            <strong>Effective Group Training</strong>

                            <div class="feature-text">Everyday our entire team works to deliver you our skills,
                                knowledge and passion</div>

                        </div>

                    </div>



                </div>

            </div>



            <!-- Images Column -->

            <div class="images-column col-lg-6 col-md-12 col-sm-12">

                <div class="pattern-layer" style="background-image:url({{ asset('frontend') }}/images/background/pattern-5.png)">
                </div>

                <div class="pattern-layer-two" style="background-image:url({{ asset('frontend') }}/images/background/pattern-6.png)">
                </div>

                <div class="inner-column">

                    <div class="image">

                        <img src="{{ asset('frontend') }}/images/resource/benefit-1.jpg" alt="" />

                    </div>

                    <div class="image-one">

                        <img src="{{ asset('frontend') }}/images/resource/benefit-2.jpg" alt="" />

                    </div>

                    <div class="image-two">

                        <img src="{{ asset('frontend') }}/images/resource/benefit-3.jpg" alt="" />

                    </div>

                    <div class="image-three">

                        <img src="{{ asset('frontend') }}/images/resource/benefit-4.jpg" alt="" />

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>

<!-- End Benefits Section -->



<!-- Fluid Section -->

<section class="fluid-section-one">

    <div class="left-side-text">BENEFITS</div>

    <div class="right-side-text">SKILLS</div>

    <div class="bottom-big-text">Facts</div>

    <div class="outer-container">

        <div class="clearfix">



            <!-- Left Column -->

            <div class="left-column">

                <div class="pattern-image" style="background-image:url({{ asset('frontend') }}/images/background/pattern-7.png)">
                </div>

                <div class="inner-column">

                    <div class="row clearfix">



                        <!-- Service Block Three -->

                        <div class="service-block-three col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="icon-box">

                                    <span class="icon flaticon-tools-and-utensils"></span>

                                </div>

                                <h4><a href="classes-detail.html">Progression</a></h4>

                            </div>

                        </div>



                        <!-- Service Block Three -->

                        <div class="service-block-three col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="icon-box">

                                    <span class="icon flaticon-plan"></span>

                                </div>

                                <h4><a href="classes-detail.html">Nutrition</a></h4>

                            </div>

                        </div>



                        <!-- Service Block Three -->

                        <div class="service-block-three col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="icon-box">

                                    <span class="icon flaticon-exercise"></span>

                                </div>

                                <h4><a href="classes-detail.html">Confience</a></h4>

                            </div>

                        </div>



                        <!-- Service Block Three -->

                        <div class="service-block-three col-lg-6 col-md-6 col-sm-12">

                            <div class="inner-box">

                                <div class="icon-box">

                                    <span class="icon flaticon-sports"></span>

                                </div>

                                <h4><a href="classes-detail.html">Workout</a></h4>

                            </div>

                        </div>



                    </div>

                </div>

            </div>



            <!-- Right Column -->

            <div class="right-column">

                <div class="inner-column">

                    <div class="image-layer" style="background-image:url({{ asset('frontend') }}/images/background/9.jpg)"></div>

                    <!-- Sec Title -->

                    <div class="sec-title light">

                        <div class="title">Let See Now</div>

                        <h2>CHECK OUR SKILLS</h2>

                    </div>

                    <div class="text">We’ve spent over 10 years defining fitness and now we hare reinventing
                        it. we’ve evolved so that you can transform your life.</div>



                    <!-- Skills -->

                    <div class="skills">



                        <!-- Skill Item -->

                        <div class="skill-item">

                            <div class="skill-header clearfix">

                                <div class="skill-title">Professionalism</div>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000"
                                            data-stop="85">0</span>%</div>
                                </div>

                            </div>

                            <div class="skill-bar">

                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                </div>

                            </div>

                        </div>



                        <!-- Skill Item -->

                        <div class="skill-item">

                            <div class="skill-header clearfix">

                                <div class="skill-title">Dedication</div>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000"
                                            data-stop="65">0</span>%</div>
                                </div>

                            </div>

                            <div class="skill-bar">

                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="65"></div>
                                </div>

                            </div>

                        </div>



                        <!-- Skill Item -->

                        <div class="skill-item">

                            <div class="skill-header clearfix">

                                <div class="skill-title">Challenging</div>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000"
                                            data-stop="50">0</span>%</div>
                                </div>

                            </div>

                            <div class="skill-bar">

                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="50"></div>
                                </div>

                            </div>

                        </div>



                        <!-- Skill Item -->

                        <div class="skill-item">

                            <div class="skill-header clearfix">

                                <div class="skill-title">Perseverance</div>

                                <div class="skill-percentage">
                                    <div class="count-box"><span class="count-text" data-speed="2000"
                                            data-stop="75">0</span>%</div>
                                </div>

                            </div>

                            <div class="skill-bar">

                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="75"></div>
                                </div>

                            </div>

                        </div>



                    </div>



                </div>

            </div>



        </div>

    </div>

</section>

<!-- End Fluid Section -->



<!-- Counter Section Two -->

<section class="counter-section-two">

    <div class="color-layer"></div>

    <div class="auto-container">

        <!-- Fact Counter -->

        <div class="fact-counter-two">

            <div class="row clearfix">



                <!-- Column -->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-muscle"></div>

                            <div class="count-outer count-box">

                                <span class="count-text" data-speed="3500" data-stop="120">0</span>

                            </div>

                            <div class="counter-title">Expert Trainer</div>

                        </div>

                    </div>

                </div>



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-fitness"></div>

                            <div class="count-outer count-box alternate">

                                <span class="count-text" data-speed="2500" data-stop="550">0</span>

                            </div>

                            <div class="counter-title">Happy Clint</div>

                        </div>

                    </div>

                </div>



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-building"></div>

                            <div class="count-outer count-box">

                                <span class="count-text" data-speed="3000" data-stop="150">0</span>

                            </div>

                            <div class="counter-title">Total Branch</div>

                        </div>

                    </div>

                </div>



                <!--Column-->

                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">

                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">

                        <div class="content">

                            <div class="icon flaticon-fitness-1"></div>

                            <div class="count-outer count-box">

                                <span class="count-text" data-speed="2000" data-stop="25">0</span>

                            </div>

                            <div class="counter-title">Experience</div>

                        </div>

                    </div>

                </div>



            </div>



        </div>



    </div>

</section>

<!-- End Counter Section -->


<!-- Choose Section -->

<section class="choose-section">

    <div class="auto-container">

        <div class="row clearfix">



            <!-- Images Column -->

            <div class="images-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">

                    <div class="info-box">

                        <h3><a href="#">Cardio <br> Training</a></h3>

                        <a class="more" href="#">More <span
                                class="arrow fa fa-arrow-circle-right"></span></a>

                        <div class="icon flaticon-stationary-bike"></div>

                    </div>



                    <div class="info-box style-two">

                        <h3><a href="#">Fitness <br> Training</a></h3>

                        <a class="more" href="#">More <span
                                class="arrow fa fa-arrow-circle-right"></span></a>

                        <div class="icon flaticon-people"></div>

                    </div>



                    <div class="image">

                        <img src="{{ asset('frontend') }}/images/resource/choose-1.jpg" alt="" />

                    </div>

                    <div class="image-1">

                        <img src="{{ asset('frontend') }}/images/resource/choose-2.jpg" alt="" />

                    </div>

                </div>

            </div>



            <!-- Content Column -->

            <div class="content-column col-lg-6 col-md-12 col-sm-12">

                <div class="inner-column">

                    <!-- Sec Title -->

                    <div class="sec-title">

                        <div class="title">Why Choose Us</div>

                        <h2>We Raise Your <br> Confidence</h2>

                    </div>



                    <!-- Featured Block -->

                    <div class="featured-block">

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

                            <div class="feature-text">Our personal trainers will help you find a perfect
                                workout.</div>

                        </div>

                    </div>



                    <!-- Featured Block -->

                    <div class="featured-block">

                        <div class="block-inner">

                            <span class="icon flaticon-premium"></span>

                            <strong>No Commitment Memberships</strong>

                            <div class="feature-text">Our personal trainers will help you find a perfect
                                workout.</div>

                        </div>

                    </div>



                </div>

            </div>



        </div>

    </div>

</section>

<!-- End Choose Section -->


@endsection
