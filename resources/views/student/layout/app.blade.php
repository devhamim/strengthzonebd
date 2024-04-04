<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ $setting->first()->title }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">

    <link rel="stylesheet" href="{{ asset('student') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('student') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('student') }}/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('student') }}/css/feather.css">

    <link rel="stylesheet" href="{{ asset('student') }}/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="{{ asset('student') }}/css/style.css">

        {{-- facebook pixel --}}
        {!! $setting->first()->facebook_pixel !!}

        {{-- Google tag --}}
        {!! $setting->first()->google_tag !!}
</head>

<body>
    <div class="main-wrapper">

        @include('student.layout.header')

        <div class="page-content">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('student.layout.footer')
    </div>


    <script data-cfasync="false" src="{{ asset('student') }}/js/email-decode.min.js"></script>
    <script src="{{ asset('student') }}/js/jquery-3.7.1.min.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>

    <script src="{{ asset('student') }}/js/bootstrap.bundle.min.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>

    <script src="{{ asset('student') }}/plugins/select2/js/select2.min.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>

    <script src="{{ asset('student') }}/plugins/feather/feather.min.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>



    <script src="{{ asset('student') }}/plugins/theia-sticky-sidebar/ResizeSensor.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>
    <script src="{{ asset('student') }}/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>

    <script src="{{ asset('student') }}/js/script.js" type="556b4980bc4b6837ad505d03-text/javascript"></script>
    <script src="{{ asset('student') }}/js/rocket-loader.min.js" data-cf-settings="556b4980bc4b6837ad505d03-|49" defer></script>
</body>
</html>
