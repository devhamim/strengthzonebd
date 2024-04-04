<header class="main-header header-style-one">

    <!-- Header Top -->

    <div class="header-top">

        <div class="outer-container">

            <div class="clearfix">

                <!-- Top Left -->

                <div class="top-left pull-left">

                    <div class="text">Welcome to Strength Zone BD</div>

                </div>

                <!-- Top Right -->

                <div class="top-right pull-right">

                    <!-- Info List -->
                    <ul class="info-list">
                        @if ($setting->first()->address != null)
                            <li><span class="icon fa fa-location-arrow"></span> {{ $setting->first()->address }}</li>
                        @endif
                        @if ($setting->first()->number != null)
                            <li>
                                <span class="icon fa fa-phone"></span>
                                <a href="tel:{{ $setting->first()->number }}"> {{ $setting->first()->number }}</a>
                            </li>
                        @endif

                        @if ($setting->first()->email != null)
                            <li>
                                <span class="icon fa fa-envelope-o"></span>
                                <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a>
                            </li>
                         @endif
                    </ul>
                </div>



            </div>

        </div>

    </div>



    <!-- Header Upper -->

    <div class="header-upper">

        <div class="outer-container clearfix">



            <div class="pull-left logo-box">

                <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt=""
                            title=""></a></div>

            </div>


            <div class="nav-outer clearfix">

                <!--Mobile Navigation Toggler-->

                <div class="mobile-nav-toggler" style="font-size: 20px">Welcome</div>
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <!-- Toggle Button -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                    </div>
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">

                        <ul class="navigation clearfix">
                            <li class="{{ Request::is('/')?'current':'' }}"><a href="{{ url('/') }}">Home</a></li>
                            <li class="{{ Request::is('about-us')?'current':'' }}"><a href="{{ route('about.us') }}">About</a></li>
                            <li class="{{ Request::is('courses')?'current':'' }}"><a href="{{ route('courses') }}">Courses</a></li>
                            {{-- <li class="{{ Request::is('our-portfolio')?'current':'' }}"><a href="{{ route('our.portfolio') }}">Portfolio</a></li> --}}
                            <li class="{{ Request::is('our-blog')?'current':'' }}"><a href="{{ route('our.blog') }}">Blog</a></li>
                            <li class="{{ Request::is('contact/us')?'current':'' }}"><a href="{{ route('contect') }}">Contact us</a></li>
                        </ul>

                    </div>

                </nav>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Cart Box -->
                    <div class="cart-box">
                        @auth('customerlogin')
                            <div class="dropdown">
                                <button class="cart-box-btn dropdown-toggle btn btn-danger" type="button" id="dropdownMenu"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('customerlogin')->user()->name }}</button>
                                <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">
                                    <ul class="btns-boxed">
                                        <li><a href="{{ route('student.dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ route('customer.logout') }}">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <a class="cart-box-btn dropdown-toggle btn btn-danger" href="{{ route('customer.reglogin') }}">Login</a>
                        @endauth
                    </div>

                    <!-- Nav Btn -->

                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>



                </div>

            </div>



        </div>

    </div>

    <!--End Header Upper-->



    <!-- Sticky Header  -->

    <div class="sticky-header">

        <div class="auto-container clearfix">

            <!--Logo-->

            <div class="logo pull-left">

                <a href="{{ url('/') }}" title=""><img width="140px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""
                        title=""></a>

            </div>

            <!--Right Col-->

            <div class="pull-right">

                <!-- Main Menu -->

                <nav class="main-menu">

                    <!--Keep This Empty / Menu will come through Javascript-->

                </nav><!-- Main Menu End-->



                <!-- Main Menu End-->

                <div class="outer-box clearfix">



                    <!-- Cart Box -->

                    {{-- <div class="cart-box">

                        <div class="dropdown">

                            <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="flaticon-shopping-bag-1"></span><span
                                    class="total-cart">2</span></button>

                            <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">



                                <div class="cart-product">

                                    <div class="inner">

                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>

                                        <div class="image"><img src="{{ asset('frontend') }}/images/resource/post-thumb-1.jpg"
                                                alt="" /></div>

                                        <h3><a href="shop-single.html">Flying Ninja</a></h3>

                                        <div class="quantity-text">Quantity 1</div>

                                        <div class="price">$99.00</div>

                                    </div>

                                </div>

                                <div class="cart-product">

                                    <div class="inner">

                                        <div class="cross-icon"><span class="icon fa fa-remove"></span></div>

                                        <div class="image"><img src="{{ asset('frontend') }}/images/resource/post-thumb-2.jpg"
                                                alt="" /></div>

                                        <h3><a href="shop-single.html">Patient Ninja</a></h3>

                                        <div class="quantity-text">Quantity 1</div>

                                        <div class="price">$99.00</div>

                                    </div>

                                </div>

                                <div class="cart-total">Sub Total: <span>$198</span></div>

                                <ul class="btns-boxed">

                                    <li><a href="shoping-cart.html">View Cart</a></li>

                                    <li><a href="checkout.html">CheckOut</a></li>

                                </ul>



                            </div>

                        </div>

                    </div> --}}



                    <!-- Nav Btn -->

                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>



                </div>



            </div>

        </div>

    </div><!-- End Sticky Menu -->



    <!-- Mobile Menu  -->

    <div class="mobile-menu">

        <div class="menu-backdrop"></div>

        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>



        <nav class="menu-box">

            <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt=""
                        title=""></a></div>

            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>

        </nav>

    </div><!-- End Mobile Menu -->



</header>
