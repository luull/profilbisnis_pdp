<?php
$name = session('data')->username
?>
<header class="site-header">
   <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
         <a class="navbar-brand" href="/{{ session('data')->username }}">
         <img src="{{ asset('images/company-logo/logo-default.png')}}" alt="logo">
         </a>
         <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#wenav">
            <span> </span>
            <span> </span>
            <span> </span>
         </button>
         <div class="collapse navbar-collapse" id="wenav">
            <ul class="navbar-nav ml-auto">
            
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('/',$name) ? 'active' : '' }}" href="/{{ $name }}">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="/profil">Profil</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('bisnis') ? 'active' : '' }}" href="/bisnis">Bisnis</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Galeri
                  </a>
                  <div class="dropdown-menu danger">
                     <a class="dropdown-item {{ Request::is('agenda') ? 'active' : '' }}" href="{{ asset('/agenda')}}">Agenda</a>
                     <a class="dropdown-item {{ Request::is('foto') ? 'active' : '' }}" href="{{ asset('/foto')}}">Foto</a>
                     <a class="dropdown-item {{ Request::is('video') ? 'active' : '' }}" href="{{ asset('/video')}}">Video</a>
                  </div>
               </li>
               
               <li class="nav-item">
                  <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/{{ session('data')->username }}#join">Daftar</a>
                </li>
                <li class="nav-item">
                  <a href="{{env('APP_URL')}}/kartunama/{{session('username')}}" rel="nofollow" target="_blank" class="btn_common btn_secondry">Kartu Nama</a>
                 </li>
            </ul>
         </div>
      </div>
   </nav> 
   <a id="close_side_menu" href="javascript:void(0);"></a>
</header>