<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Bisnis :: @yield('title')</title>
    @yield('meta')
    <!--Bootstrap-->
    <link rel="icon" href="{{ asset('favicon.png')}}" type="image/x-generic">
    <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-generic">
    <link rel="stylesheet" href="{{ asset('templates/templates_2/css/bootstrap.min.css')}}">
    <!-- Main Stylesheet -->
    <link href="{{ asset('templates/templates_2/css/style.css')}}" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('templates/templates_2/css/aos.css')}}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('templates/global/font-awesome/font-awesome.min.css')}}">
</head>

<body>

    @yield('nav')
    <main id="main">
        @yield('content')
        @include('templates.2_templates.footer')
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-chevron-up"></i></a>

    <!-- jQuery -->
    <script src="{{ asset('templates/templates_2/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('templates/templates_2/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('templates/templates_2/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('templates/templates_2/js/main.js')}}"></script>
    <!-- Aos -->
    <script src="{{ asset('templates/templates_2/js/aos.js')}}"></script>
    <script>
        $(document).ready(function() {
            if (window.location.hash.length > 0) {
                window.scrollTo(0, $(window.location.hash).offset().top);
            }
        });
    </script>
    <script>
        AOS.init();
    </script>
    @yield('modal')
    @yield('script')
</body>

</html>