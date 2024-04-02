
<!DOCTYPE html>
<html lang="en" data-menu="flush-menu" data-nav-size="nav-default">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->first()->title }}</title>

    <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="{{ asset('backend') }}/assets/css/orange-color.css">
    {{-- summer note --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="body-padding body-p-top light-theme">

    <!-- header start -->
    @include('backend.layouts.header')
    <!-- header end -->

    <!-- main sidebar start -->
    @include('backend.layouts.sidebar')
    <!-- main sidebar end -->


    <div class="main-content">
        <!-- main content start -->
            @yield('content')
        <!-- main content end -->
        <!-- footer start -->
        @include('backend.layouts.footer')
        <!-- footer end -->
    </div>

    @include('sweetalert::alert')


    <script src="{{ asset('backend') }}/assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/apexcharts.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/moment.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/daterangepicker.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.bundle.min.js"></script>
    {{-- summer note --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>


    @yield('footer_script')
</body>
</html>
