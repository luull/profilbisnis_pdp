@extends('templates.1_templates.master')
@section('nav')
@include('templates.1_templates.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username;
$url = request()->segment(3);
$bisnis = request()->segment(1);

?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back(-1)"><i class="fa fa-angle-left mr-2"></i>Kembali</a></li>
    <li class="breadcrumb-item"><a href="/{{ session('data')->username }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Produk {{ Str::upper($nama_bisnis) }}</li>
  </ol>
</nav>
<section class="product-list section-bg3">
    <div class="container" data-aos="fade-up">
        @include('templates.global.search2')
        <div class="row gy-4 mt-5" data-aos="fade-left">
        @foreach ($produk as $item)
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
                    <?PHP
                    $firsturl = str_replace(" ", "%20", $item->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="{{ asset($item->foto) }}" alt="shop">
                  <div class="overlay center-block">
                     <a class="opens" href="https://wa.me/{{ $no_wa }}?text={{ $wa_template }} {{ $resulturl }}" target="_blank"><i class="fa fa-shopping-cart"></i></a>
                  </div>
               </div>
               <div class="shop_content text-center">
                  <h4 class="darkcolor"><a href="{{ env('APP_URL') }}/{{$link}}/{{ session('data')->username }}/{{$item->slug}}">{{ $item->nama_brg }}</a></h4>
                  <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                  <h4 class="price-product">Rp.<?PHP echo number_format($item->harga); ?></h4>
               </div>
            </div>
         </div>
         @endforeach
        </div>
</section>
@endsection