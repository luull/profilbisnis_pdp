<?php
$name = session('data')->username
?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="/{{ session('data')->username }}"><img src="{{ asset('images/company-logo/logo-default.png')}}" alt="Logo Img" class="img-fluid"></a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link {{ Request::is('/',$name) ? 'active' : '' }}" href="/{{ $name }}">Home</a></li>
                <li><a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a></li>
                <li><a class="nav-link {{ Request::is('bisnis') ? 'active' : '' }}" href="/bisnis">Bisnis</a></li>
                <li><a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a></li>
                <li class="dropdown"><a href="#"><span>Galeri</span> <i class="fa fa-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link {{ Request::is('/agenda') ? 'active' : '' }}" href="{{ asset('/agenda')}}">Agenda</a></li>
                        <li><a class="nav-link {{ Request::is('/foto') ? 'active' : '' }}" href="{{ asset('/foto')}}">Photo</a></li>
                        <li><a class="nav-link {{ Request::is('/video') ? 'active' : '' }}" href="{{ asset('/video')}}">Video</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a></li>
                <li><a class="nav-link" href="#join" onclick="reloadPage();">Daftar</a></li>
                <li><a class="nav-link getstarted" data-scroll-nav="0" href="{{env('APP_URL')}}/kartunama/{{session('username')}}" rel="nofollow" target="_blank">Kartu Nama</a></li>
            </ul>
            <i class="fa fa-bars mobile-nav-toggle"></i>
        </nav>


    </div>
</header>
<script>
    var check = function() {
        return $(window).width() <= 800
    }

    function reloadPage() {
        if (check()) {
            location.reload(true);
        }
    }
</script>