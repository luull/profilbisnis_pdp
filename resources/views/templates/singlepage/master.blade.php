<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Favicon -->
    <link href="{{ asset('favicon.ico')}}" rel="icon">
    <!-- Bundle -->
    <link href="{{ asset('templates/singlepage/vendor/css/bundle.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('templates/singlepage/vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('templates/singlepage/vendor/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/singlepage/vendor/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/singlepage/vendor/css/LineIcons.min.css')}}">
    <!-- Style Sheet -->
    <link href="{{ asset('templates/singlepage/css/line-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/singlepage/css/style.css')}}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">
    @yield('content')
    @include('templates.singlepage.footer')
    <script src="{{ asset('templates/templates_1/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/bundle.min.js')}}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('templates/singlepage/vendor/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/wow.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/parallaxie.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/contact_us.js')}}"></script>
    <script src="{{ asset('templates/singlepage/vendor/js/swiper.min.js')}}"></script>
    <script src="{{ asset('templates/singlepage/js/script.js')}}"></script>
    @yield('script')
</body>
</html>
