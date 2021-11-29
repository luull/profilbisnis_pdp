@extends('templates.1_templates.master')
@section('nav')
@include('templates.1_templates.nav-content')
@stop
@section('content')
<?php
$name = session('data')->username
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back(-1)"><i class="fa fa-angle-left mr-2"></i>Kembali</a></li>
    <li class="breadcrumb-item"><a href="/{{ session('data')->username }}">Home</a></li>
    <li class="breadcrumb-item"><a href="/bisnis">Bisnis</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Bisnis</li>
  </ol>
</nav>
<section >
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="row">
                <div class="col-6 mb-3">
                    @if($count_produk < 1) <br>
                        @else
                        <a href="{{ env('APP_URL') }}/{{$link}}/produk/{{ $bisnis->slug }}" class="btn_common btn_secondry"><i class="fa fa-shopping-cart"></i> Daftar Produk</a>
                        @endif
                </div>
                <div class="col-lg-12 col-md-12 align-self-center">
                    <div class="card mb-3" style="max-width:100%;overflow:scroll;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-header">

                                    <img src="{{ (@file_exists(public_path($bisnis->logo))) ? asset($bisnis->logo) : asset('images/no-business.svg') }}" class="img-fluid" style="width:50px;float:left;" alt="...">
                                    <h5 class="text-center pt-4">{!! $bisnis->nama !!}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="container">

                                        <p class="card-text">{!! $bisnis->keterangan !!}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection