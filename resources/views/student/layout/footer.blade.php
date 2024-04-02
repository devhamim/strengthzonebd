<footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>{{ $setting->first()->about }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Instructor</h2>
                        <ul>
                            <li><a href="instructor-profile.html">Profile</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="instructor-list.html">Instructor</a></li>
                            <li><a href="deposit-instructor-dashboard.html"> Dashboard</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-2 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Student</h2>
                        <ul>
                            <li><a href="student-profile.html">Profile</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="students-list.html">Student</a></li>
                            <li><a href="deposit-student-dashboard.html"> Dashboard</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">News letter</h2>
                        <div class="news-letter">
                            <form>
                                <input type="text" class="form-control"
                                    placeholder="Enter your email address" name="email">
                            </form>
                        </div>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <img src="{{ asset('student') }}/img/icon/icon-20.svg" alt class="img-fluid">
                                <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                            </div>
                            <p>
                                <img src="{{ asset('student') }}/img/icon/icon-19.svg" alt class="img-fluid">
                                <a href="https://dreamslms.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="b1d5c3d4d0dcc2dddcc2f1d4c9d0dcc1ddd49fd2dedc">[email&#160;protected]</a>
                            </p>
                            <p class="mb-0">
                                <img src="{{ asset('student') }}/img/icon/icon-21.svg" alt class="img-fluid">
                                +19 123-456-7890
                            </p>
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
                            <p class="">{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortechit.com/" class="text-primary">Nugortech IT</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>
