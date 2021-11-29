@extends('templates.1_templates.master')
@section('nav')
@include('templates.1_templates.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username;
$dan = '&';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back(-1)"><i class="fa fa-angle-left mr-2"></i>Kembali</a></li>
    <li class="breadcrumb-item"><a href="/{{ session('data')->username }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
  </ol>
</nav>
<section id="our-shop" class="padding">
   <div class="container">
   @include('templates.global.search')
      <div class="row mt-3">
      @foreach ($produk_default as $item)
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
                  <h4 class="darkcolor"><a href="{{ env('APP_URL') }}/produk1/{{ session('data')->username }}/{{$item->slug}}">{{ $item->nama_brg }}</a></h4>
                  <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                  <h4 class="price-product">Rp.<?PHP echo number_format($item->harga); ?></h4>
               </div>
            </div>
         </div>
         @endforeach
         @if (session('level')>0)
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
                  <h4 class="darkcolor"><a href="{{ env('APP_URL') }}/produk/{{ session('data')->username }}/{{$item->slug}}">{{ $item->nama_brg }}</a></h4>
                  <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                  <h4 class="price-product">Rp.<?PHP echo number_format($item->harga); ?></h4>
               </div>
            </div>
         </div>
         @endforeach
         @endif
        </div>
    </div>
</section>
@endsection