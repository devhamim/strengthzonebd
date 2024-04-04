<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title>{{ $setting->first()->title }}</title>

    <!-- Stylesheets -->

    <link href="{{ asset('frontend') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('frontend') }}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
    <link href="{{ asset('frontend') }}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">
    <!-- Color Switcher Mockup -->
    <link href="{{ asset('frontend') }}/css/color-switcher-design.css" rel="stylesheet">
    <!-- Color Themes -->
    <link id="theme-color-file" href="{{ asset('frontend') }}/css/color-themes/default-theme.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        {{-- facebook pixel --}}
        {!! $setting->first()->facebook_pixel !!}

        {{-- Google tag --}}
        {!! $setting->first()->google_tag !!}
</head>
<body class="hidden-bar-wrapper">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- Main Header-->
        @include('frontend.layout.header')
        <!-- End Main Header -->
        <!-- Sidebar Cart Item -->
        @yield('content')
        <!-- End Clients Section -->
        <!-- Main Footer -->
        @include('frontend.layout.footer')
    </div>

    <!--End pagewrapper-->
    <!-- Color Palate / Color Switcher -->

    {{-- <div class="color-palate">

        <div class="color-trigger">

            <i class="fa fa-gear"></i>

        </div>

        <div class="color-palate-head">

            <h6>Choose Your Color</h6>

        </div>



        <div class="various-color clearfix">

            <div class="colors-list">

                <span class="palate default-color active"
                    data-theme-file="css/color-themes/default-theme.css"></span>

                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>

                <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>

                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>

                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>

                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>

                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>

                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>

            </div>

        </div>



        <h5>Other Options</h5>

        <ul class="rtl-version option-box">
            <li class="rtl">RTL Version</li>
            <li>LTR Version</li>
        </ul>



        <a href="#" class="purchase-btn">Purchase now $17</a>



        <div class="palate-foo">

            <span>You will find much more options for colors and styling in admin panel. This color picker is used only
                for demonstation purposes.</span>

        </div>



    </div> --}}
    <!-- Search Popup -->

    {{-- <div class="search-popup">

        <button class="close-search style-two"><span class="flaticon-multiply"></span></button>

        <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>

        <form method="post" action="https://expert-themes.com/html/gym/blog.html">

            <div class="form-group">

                <input type="search" name="search-field" value="" placeholder="Search Here"
                    required="">

                <button type="submit"><i class="fa fa-search"></i></button>

            </div>

        </form>

    </div> --}}

    <!-- End Header Search -->



    <!--Scroll to top-->

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

    @include('sweetalert::alert')

    <script src="{{ asset('frontend') }}/js/jquery.js"></script>

    <!--Revolution Slider-->

    <script src="{{ asset('frontend') }}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <script src="{{ asset('frontend') }}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <script src="{{ asset('frontend') }}/js/main-slider-script.js"></script>



    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>

    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>

    <script src="{{ asset('frontend') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="{{ asset('frontend') }}/js/jquery.fancybox.js"></script>

    <script src="{{ asset('frontend') }}/js/appear.js"></script>

    <script src="{{ asset('frontend') }}/js/parallax.min.js"></script>

    <script src="{{ asset('frontend') }}/js/tilt.jquery.min.js"></script>

    <script src="{{ asset('frontend') }}/js/jquery.paroller.min.js"></script>

    <script src="{{ asset('frontend') }}/js/owl.js"></script>

    <script src="{{ asset('frontend') }}/js/wow.js"></script>

    <script src="{{ asset('frontend') }}/js/nav-tool.js"></script>

    <script src="{{ asset('frontend') }}/js/jquery-ui.js"></script>

    <script src="{{ asset('frontend') }}/js/script.js"></script>

    <script src="{{ asset('frontend') }}/js/color-settings.js"></script>



    <!--Google Map APi Key-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o"></script>

    <script src="{{ asset('frontend') }}/js/map-script.js"></script>

    <!--End Google Map APi-->



</body>

</html>
