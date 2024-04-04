<footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">

                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>{{ $setting->first()->about }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">

                    @foreach ($blogs->take(2) as $blog)
                        <div class="post">
                            <div class="col-lg-6">
                                <div class="thumb">
                                    <a href="{{ route('our.blog.details', $blog->slug) }}">
                                        <img width="100%" src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                <span class="date">{{ $blog->created_at->format('d M Y') }}</span>
                            </div>

                        </div>
                    @endforeach

                </div>
                <div class="col-lg-2 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Course</h2>
                        <ul>
                            @foreach ($courses->take(6) as $course)
                                <li><a href="{{ route('courses.details', $course->slug) }}">{{ $course->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">News letter</h2>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <img src="{{ asset('student') }}/img/icon/icon-20.svg" alt class="img-fluid">

                                @if ($setting->first()->address != null)
                                    <p>{{ $setting->first()->address }}</p>
                                @endif
                            </div>

                            @if ($setting->first()->email != null)
                                <p>
                                    <img src="{{ asset('student') }}/img/icon/icon-19.svg" alt class="img-fluid">
                                    <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>
                                </p>
                            @endif
                            @if ($setting->first()->number != null)
                                <p class="mb-0">

                                    <img src="{{ asset('student') }}/img/icon/icon-21.svg" alt class="img-fluid">
                                    <a href="tel:{{ $setting->first()->number }}"> {{ $setting->first()->number }}</a>
                                </p>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">

            <div class="copyright">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <p class="">{{ $setting->first()->footer }}  Design & Development by <a href="https://www.boguraweb.com/" class="text-primary">Boguraweb</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
