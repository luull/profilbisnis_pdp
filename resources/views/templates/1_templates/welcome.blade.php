@extends('templates.1_templates.master')
@section('nav')
@include('templates.1_templates.nav')
@stop
@section('content')
@if (count($banner)>=1)
@foreach ($banner as $bn)
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row ">
            <div class="col-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="zoom-in " data-aos-delay="100">{!!$bn->judul!!}</h1>
                <h2 class="text-white mb-0" data-aos="zoom-in" data-aos-delay="400">{!!$bn->sub_judul1!!}</h2>
                <p data-aos="zoom-in" data-aos-delay="700" class="text-white">{!!$bn->sub_judul2!!}</p>
                <div class="d-flex mt-3" data-aos="zoom-in" data-aos-delay="1000">
                    <a href="{{$bn->link}}" class="btn_common btn_secondry">{!!$bn->tombol!!}</a>
                </div>
            </div>
            <!-- <div class="col-4 order-1 order-lg-2 hero-img">
                <img src="{{ asset($bn->gambar)}}" class="img-fluid animated" alt="">
            </div> -->
        </div> <!-- row -->
    </div>
</section>
@endforeach
@else
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row ">
            <div class="col-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="zoom-in " data-aos-delay="100">Lorem Ipsum</h1>
                <h2 class="text-white mb-0" data-aos="zoom-in" data-aos-delay="400">Lorem Ipsum</h2>
                <p data-aos="zoom-in" data-aos-delay="700" class="text-white">Lorem Ipsum</p>
                <div class="d-flex mt-3" data-aos="zoom-in" data-aos-delay="1000">
                    <a href="#about" class="btn_common btn_secondry">Lorem</a>
                </div>
            </div>
            <!-- <div class="col-4 order-1 order-lg-2 hero-img">
                <img src="{{ asset($bn->gambar)}}" class="img-fluid animated" alt="">
            </div> -->
        </div> <!-- row -->
    </div>
</section>
@endif
<!-- section about -->
<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
        <div class="col-md-5 wow fadeInRight" data-wow-delay="300ms">
          <div class="image">
           <img src="{{ asset($member->foto)}}" alt="Webox">
          </div>
        </div>
      <div class="col-md-7 wow fadeInLeft" data-wow-delay="300ms">
      @if (!@empty($member->welcome_note))
       <h2 class="heading darkcolor font-light2 heading_space"> {{$member->welcome_note->judul}}<span class="divider-left"></span></h2>
       <h4 class="darkcolor bottom25">{{$member->welcome_note->sub_judul}}</h4>
       <p class="bottom25">{!!$member->welcome_note->welcome_note!!}</p>
       @else 
       <h2 class="heading darkcolor font-light2 heading_space"> {{$welcome_note_default->judul}}<span class="divider-left"></span></h2>
       <h4 class="darkcolor bottom25">{{$welcome_note_default->sub_judul}}</h4>
       <p class="bottom25">{!!$wp!!}</p>
       @endif
      </div>
    </div>
  </div>
</section>
@if (count($bisnis_default)>=1 or count($bisnis)>=1 )
<!-- section business -->
<section id="our-media" class="padding bg_light">
   <div class="container">
      <div class="row">
         <div class="col-md-12 wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading darkcolor font-light2 bottom30"> Bisnis Saya <span class="divider-left"></span></h2>
         </div>
         @foreach ($bisnis_default as $bs)
         <div class="col-lg-6">
             <a href="/bisnis1/{{$bs->slug}}">
            <div class="history-media d-table top40 wow fadeIn" data-wow-delay="300ms">
               <div class="image d-table-cell"><img src="{{ asset($bs->logo)}}" alt="image"></div>
               <div class="d-table-cell">
                  <h3 class="darkcolor font-light bottom20"><strong>{{ $bs->nama }}</strong></h3>
                  <p>{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}.</p>
               </div>
            </div>
            </a>
         </div>
         @endforeach
         @if(session('level')>0)
         @foreach ($bisnis as $bs)
         <div class="col-lg-6">
             <a href="/bisnis/{{$bs->slug}}">
            <div class="history-media d-table top40 wow fadeIn" data-wow-delay="300ms">
               <div class="image d-table-cell"><img src="{{ asset($bs->logo)}}" alt="image"></div>
               <div class="d-table-cell">
                  <h3 class="darkcolor font-light bottom20"><strong>{{ $bs->nama }}</strong></h3>
                  <p>{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}.</p>
               </div>
            </div>
            </a>
         </div>
        @endforeach
        @endif
      </div>
   </div>
</section>      
@endif
@if (count($produk_display)>=1)
<section id="our-shop" class="padding">
   <div class="container">
      <div class="row">
      <div class="col-md-12 wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading darkcolor font-light2 bottom30"> Produk Saya <span class="divider-left"></span></h2>
         </div>
      @foreach ($produk_display as $item)
         <div class="col-lg-4 col-md-6 col-sm-6 wow fadeIn" data-wow-delay="300ms">
            <div class="shopping-box bottom30">
               <div class="image">
                  <img src="{{ asset($item->foto) }}" alt="shop">
                  <!-- <div class="overlay center-block">
                     <a class="opens" href="shop_cart.html"><i class="fa fa-shopping-cart"></i></a>
                  </div> -->
               </div>
               <div class="shop_content text-center">
                  <h4 class="darkcolor"><a href="/produk1/{{ session('data')->username }}/{{$item->slug}}">{{ $item->nama_brg }}</a></h4>
                  <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                  <h4 class="price-product">Rp.<?PHP echo number_format($item->harga); ?></h4>
               </div>
            </div>
         </div>
         @endforeach
        </div>
    <div class="text-center mt-5">
            <a class="text-center" href="/produk">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i> </a>
        </div>
    </div>
</section>
@endif
<section id="join" class="half-section">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 nopadding">
            <div class="image hover-effect img-container">
               <img alt="" src="{{ asset('templates/templates_1/images/join.png')}}" class="equalheight">
            </div>
         </div>
         <div class="col-lg-6 nopadding">
            <div class="split-box text-center center-block container-padding equalheight">
               <div class="heading-title padding padding-bottom-sm-0">
                <h2 class="heading heading_space darkcolor wow fadeInUp" data-wow-delay="400ms">Bergabung<span> Bersama Kami</span><span class="divider-center"></span></h2>
               <p class="heading_space wow fadeInUp" data-wow-delay="500ms"> {{session('konfigurasi')->text_join}}</p>
               <a href="{{session('konfigurasi')->url_join}}-{{session('no_member')}}.html" target="_blank" class="btn_common btn_primary wow fadeInUp mb-3" data-wow-delay="600ms">Daftar</a>
               @if (session('level'))
               <a href="https://api.whatsapp.com/send?phone={{ session('data')->wa }}&text={{ session('data')->wa_template->kontak }}  {{session('konfigurasi')->app_name}}" target="blank" class="btn_common btn_secondry wow fadeInUp mb-3" data-wow-delay="600ms">Hubungi Kami</a>
               @else
               <a href="https://api.whatsapp.com/send?phone={{ session('data')->wa }}&text={{ $wa_template_default->kontak }}  {{session('konfigurasi')->app_name}}" target="blank" class="btn_common btn_secondry wow fadeInUp mb-3" data-wow-delay="600ms">Hubungi Kami</a>
               @endif
            </div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection