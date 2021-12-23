@extends('templates.singlepage.master')
@include('templates.singlepage.nav')
@section('content')
<section class="slider p-md-0">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- First Slide -->
            <div class="swiper-slide">
                <div class="bg-overlay bg-black opacity-2"></div>
                <img src="{{ asset('templates/singlepage/images/banner-pdp.png')}}" alt="slider">
                @foreach ($banner as $bn)
                <div class="container slider-text">
                    <div class="row">
                        <div class="col-12 col-md-6 col-sm-12 pt-5 text-center text-md-left mb-0 mb-md-5">
                            <h1 class="main-font slider-heading">{!!$bn->judul!!} <span class="d-block">{!!$bn->sub_judul1!!}</span></h1>
                            <p class="alt-font slider-para py-2">{!!$bn->sub_judul2!!}</p>
                            <a href="{!!$bn->link!!}" class="scroll btn button btn-medium btn-rounded btn-white mb-5">{!!$bn->tombol!!}</a>
                        </div>
                        <div class="col-0 col-md-6 col-sm-0 col-xs-0">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>
    </div>
    <!-- Social Icons -->
    <ul class="social-icons social-icons-simple revicon white d-none d-lg-block">
        <li class="d-table"><a class="social-icon" href="http://twitter.com/{{ session('data')->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li class="d-table"><a class="social-icon" href="http://facebook.com/{{ session('data')->fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="d-table"><a class="social-icon" href="http://instagram.com/{{ session('data')->ig }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li class="d-table"><a class="social-icon" href="https://www.youtube.com/channel/{{ session('data')->tube }}/featured" target="_blank"><i class="fab fa-youtube"></i></a></li>
    </ul>
</section>
<section class="about" id="about">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="heading-area d-inline-block">
                    <div class="mb-4"><img src="{{ asset('templates/singlepage/images/about-border.png')}}" alt="About-line"></div>
                    @if (!@empty($member->welcome_note))
                    <h6 class="sub-title alt-font text-sec"> {{$member->welcome_note->judul}}</h6>
                    <h2 class="title main-font text-main my-4">{{$member->welcome_note->sub_judul}}</h2>
                    <p class="paragraph alt-font text-sec">{!! Str::limit($member->welcome_note->welcome_note, 400, '...') !!}</p>
                    @endif
                    <a class="btn btn-success" href="/about">Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>
@if (count($produk)>=1)
<section class="blog py-0" id="product">
    @foreach ($produk as $item)
    <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".8s">
            <div class="blog-context text-white">
                <h2 class="main-font">{{ $item->nama_brg }}</h2>
                <p>{!! Str::limit($item->keterangan_singkat, 300, '...') !!}.</p>
                <a href="/produk/{{ session('data')->username }}/{{$item->slug}}" class="btn button btn-medium btn-rounded btn-transparent mb-5">Lihat Detail</a>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 wow fadeIn blog-background" data-wow-duration="1s" data-wow-delay=".5s">
            <img src="{{ asset($item->foto) }}" alt="">
        </div>
    </div>
    @endforeach
</section>
@endif
@if (count($testi)>=1)
<section class="reviews" id="testimoni">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image -->
            <div class="col-12 col-md-6 wow fadeInLeft order-2 order-md-1 pt-5 pt-md-0" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="reviews-img">
                    <img src="{{ asset('templates/singlepage/images/logo-pdp.png')}}" alt="Testimonial">
                </div>
            </div>
            <!-- Content -->
            <div class="col-12 col-md-6 wow fadeInRight order-1 order-md-2" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="heading-area text-center">
                    <div class="mb-4"><img src="{{ asset('templates/singlepage/images/about-border.png')}}" alt="About-line"></div>
                    <h2 class="title main-font text-main my-4">Testimoni</h2>
                </div>
                <div class="testimonial-carousel">
                    <div class="testimonial-box owl-carousel owl-theme">
                        <!-- Item-1 -->
                        @foreach ($testi as $item)
                        <a href="{{ env('APP_URL') }}/testimoni/detil/{{ session('data')->username }}/{{$item->id}}">
                        <div class="item text-center animate-fade">
                            <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
                            <p class="text">{!! $item->keterangan !!}</p>
                            <div class="img-holder"><img src="{{asset($item->foto)}}" alt="Image"></div>
                            <h4 class="user-name">{{$item->nama}}</h4>
                        </div>
                        </a>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- Start Menu Section -->
<section class="menu portfolio-three pb-0" id="photo">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="heading-area d-inline-block">
                    <div class="mb-4"><img src="{{ asset('templates/singlepage/images/about-border.png')}}" alt="About-line"></div>
                    <h6 class="sub-title alt-font text-sec">Photo Domba</h6>
                    <h2 class="title main-font text-main my-4">Galeri Domba Presiden</h2>

                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row justify-content-center m-0">
                <!-- Menu Item 1 -->
                @foreach ($photos as $photo)
                <div class="col-md-3 items web">
                    <div class="item-img">
                        <a href="{{  asset($photo->file_photo)  }}" data-fancybox="images">
                            <img src="{{  asset($photo->file_photo)  }}" alt="image">
                            <div class="item-img-overlay valign">
                                <div class="overlay-info text-center">
                                    <span class="image-hover mb-3"><i class="lni-eye"></i></span>
                                    <h5 class="text-white">{{$photo->keterangan}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
<!-- Start Menu Section -->
<section class="menu portfolio-three pb-0" id="video">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="heading-area d-inline-block">
                    <div class="mb-4"><img src="{{ asset('templates/singlepage/images/about-border.png')}}" alt="About-line"></div>
                    <h6 class="sub-title alt-font text-sec">Video Domba</h6>
                    <h2 class="title main-font text-main my-4">Galeri Domba Presiden</h2>

                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row justify-content-center m-0">
                <!-- Menu Item 1 -->
                @foreach ($video as $photo)
                <div class="col-md-6 col-lg-4 py-4" data-aos="zoom-in" data-aos-delay="100" id="t-{{$photo->id}}">
                    <div class="gallery-container">
                        <img src="https://img.youtube.com/vi/{{$photo->id_youtube}}/0.jpg" class="img-fluid youtube" alt="" id="{{$photo->id_youtube}}" style="cursor:pointer" alt="">

                        <div class="overlayy">
                            <p class="text p-2">
                                <span id="ket-{{$photo->id_youtube}}">{{$photo->judul}}</span><br>
                                <span class="small">{{$photo->katagori}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
<div class="modal fade" id="modal-video" tabindex="-1" aria-labelledby="modal-fotoLabel" aria-hidden="true">
    <div class=" modal-dialog">
    <div class="modal-content" style="background:transparent !important;border:none !important;color:#fff !important;">
        <div class="modal-header" style="border:none !important;padding:0px !important;">
            <h5 class="modal-title" id="modal_title"></h5>
        </div>
        <div class="modal-body" id="modal-body">
            <div class="container">
                <div id="img"></div>
                <p id="ket"></p>
            </div>
        </div>


    </div>
</div>
</div>
@stop
@section('script')

<script type="text/javascript">
    $(function() {
        $(".youtube").click(function() {
            var id = $(this).attr('id');
            $("#ym_id").val(id);
            // var url="https://www.youtube.com/embed/" + id + "?rel=0&amp;showinfo=0";
            var mbed = '<iframe id="videoPlayer" class="videoPlayer" style="overflow: hidden !important;min-height:250px !important;" src="https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';
            var ket = $("#ket-" + id).html();
            $("#modal-body").html(mbed);
            $("#modal_title").html(ket)
            $('#modal-video').modal('toggle')

        })
        $(".team-member-content").click(function() {
            var idnya = $(this).attr('id').split("-");
            var id = "g-" + idnya[1];
            var gambar = $("#" + id).html();
            var ket = $("#ket-" + idnya[1]).html();
            $("#modal-body").html(gambar);
            $("#modal_title").html(ket)
            $("#modal-video").modal();

        })
        $("#btnStop").click(function() {
            pausevideo();
            $('#modal-video').modal('toggle');
        })

        $("#close").click(function() {

            var id = $("#ym_id").val();
            // var url="https://www.youtube.com/embed/" + id + "?rel=0&amp;showinfo=0";
            var mbed = '<iframe id="videoPlayer" class="videoPlayer" style="width:auto ;height:auto;min-width:475px; min-height:315px;overflow:auto" src="https://www.youtube.com/embed/' + id + '?autoplay=0&rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';

            var ket = $("#ket-" + id).html();
            $("#modal-body").html(mbed);
            $('#modal-video').modal('toggle');

        })

    })
</script>
@endsection