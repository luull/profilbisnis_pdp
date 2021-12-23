@extends('templates.singlepage.master')
@include('templates.singlepage.nav-content')
@section('content')
<section class="page-title">
    <div class="bg-overlay bg-black opacity-6"></div>
    <div class="container">
        <h2 class="hide-cursor">Detail Produk</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/{{ session('data')->username }}"><span class="icon fas fa-home"></span>Home</a></li>
            <li>Detail Produk</li>
        </ul>
    </div>
</section>
<section class="main" id="main">
    <!-- Content -->
    <div class="blog-content">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <!-- Start Heading Section -->
                    <div class="standalone-detail">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2  text-center wow slideInUp" data-wow-duration="2s">
                                <h1 class="heading">{{ $produk->nama_brg }}</h1>
                                <p class="para_text m-auto">{!! $produk->keterangan !!}.</p>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-start">
                            <div class="col-lg-12">
                                <div class="blog-image wow hover-effect fadeInLeft text-center text-lg-left">
                                  <div class="text-center">
                                    <img src="{{ (@file_exists(public_path($produk->foto))) ? asset($produk->foto) : asset('images/no-product.svg') }}" alt="image" style="margin: auto;">
                                  </div>
                                </div>
                            </div>
                            
                        </div>
                     
                    </div>
                    <!-- End Heading Section -->
                </div>
            </div>
        </div>
    </div>
</section>
@stop