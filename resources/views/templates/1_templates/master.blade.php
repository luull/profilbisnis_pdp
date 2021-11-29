<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Bisnis :: @yield('title')</title>
  @yield('meta')
  <link rel="stylesheet" type="text/css" href="{{ asset('templates/templates_1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('templates/templates_1/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('templates/templates_1/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{ asset('templates/templates_1/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('templates/templates_1/css/cubeportfolio.min.css')}}">
  <link rel="stylesheet" href="{{ asset('templates/templates_1/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('templates/templates_1/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('templates/templates_1/css/style.css')}}">
  <link rel="icon" href="{{ asset('favicon.png')}}" type="image/x-generic">
  <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-generic">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('templates/global/font-awesome/font-awesome.min.css')}}">
</head>

<body>
<a href="javascript:void(0)" class="scrollToTop"><i class="fa fa-angle-up"></i></a>

  @yield('nav')
  <main id="main">
    @yield('content')
    @include('templates.1_templates.footer')
  </main>

  <script src="{{ asset('templates/templates_1/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{ asset('templates/templates_1/js/popper.min.js')}}"></script>
  <script src="{{ asset('templates/templates_1/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('templates/templates_1/js/jquery.appear.js')}}"></script>
  <script src="{{ asset('templates/templates_1/js/wow.min.js')}}"></script>
  <script src="{{ asset('templates/templates_1/js/functions.js')}}"></script>
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