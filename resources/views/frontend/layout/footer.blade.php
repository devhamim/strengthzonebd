<footer class="main-footer" style="background-image:url({{ asset('frontend') }}/images/background/2.jpg)">

    <div class="auto-container">
        <!-- Widgets Section -->

        <div class="widgets-section">

            <div class="row clearfix">
                <!-- Big Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">

                    <div class="row clearfix">
                        <!--Footer Column-->

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget logo-widget">

                                <div class="logo">

                                    <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="" /></a>

                                </div>
                                <div class="text">{{ $setting->first()->about }}</div>

                                <div class="social-links">

                                    <span>Follow on Socials </span>

                                    <a href="{{ $setting->first()->facebook }}" target="_blanck" class="fa fa-facebook"></a>

                                    <a href="{{ $setting->first()->youtube }}" target="_blanck" class="fa fa-youtube"></a>

                                    <a href="{{ $setting->first()->instagram }}" target="_blanck" class="fa fa-instagram"></a>

                                    <a href="{{ $setting->first()->linkedin }}" target="_blanck" class="fa fa-linkedin"></a>

                                </div>
                                <div class="term mt-3">
                                    <ul>
                                        <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>



                        <!-- Footer Column -->

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget news-widget">

                                <h4>Latest Posts</h4>

                                <!-- Footer Column -->

                                <div class="widget-content">
                                    @foreach ($blogs->take(2) as $blog)
                                    <div class="post">
                                        <div class="thumb"><a href="{{ route('our.blog.details', $blog->slug) }}"><img
                                                    src="{{ asset('uploads/blog') }}/{{ $blog->image }}"
                                                    alt=""></a></div>

                                        <h5><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h5>

                                        <span class="date">{{ $blog->created_at->format('d M Y') }}</span>

                                    </div>
                                    @endforeach
                                </div>

                            </div>

                        </div>



                    </div>

                </div>



                <!-- Big Column -->

                <div class="big-column col-lg-6 col-md-12 col-sm-12">

                    <div class="row clearfix">



                        <!-- Footer Column -->

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <h4>Our Course</h4>

                                <ul class="list-link">
                                    @foreach ($courses->take(6) as $course)
                                        <li><a href="{{ route('courses.details', $course->slug) }}">{{ $course->title }}</a></li>
                                    @endforeach


                                </ul>

                            </div>

                        </div>



                        <!-- Footer Column -->

                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget timing-widget">

                                <h4>Working Hours</h4>

                                <ul>

                                    <li>Monday – Friday:<span>07:00 – 21:00</span></li>

                                    <li>Saturday:<span>07:00 – 16:00</span></li>

                                    <li>Sunday Closed</li>

                                </ul>

                            </div>

                        </div>



                    </div>

                </div>



            </div>

        </div>



        <!-- Footer Bottom -->

        <div class="footer-bottom">

            <div class="copyright">{{ $setting->first()->footer }}  Design & Development by <a href="https://www.boguraweb.com/" class="text-primary">Boguraweb</a></div>

        </div>



    </div>

</footer>
