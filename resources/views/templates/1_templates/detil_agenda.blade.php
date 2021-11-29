@extends('templates.1_templates.master')
@section('nav')
@include('templates.1_templates.nav-content')
@stop
@section('content')
<!-- ======= Breadcrumbs ======= -->
<?php
$name = session('data')->username
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back(-1)"><i class="fa fa-angle-left mr-2"></i>Kembali</a></li>
    <li class="breadcrumb-item"><a href="/{{ session('data')->username }}">Home</a></li>
    <li class="breadcrumb-item"><a href="/agenda">Agenda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Agenda</li>
  </ol>
</nav>
<section class="detail-event padding">
    <div class="container">
            <div class="row  mb-5">
                <div class="col-md-4 col-lg-4 mb-5  align-top ">
                    <img src="{{ (@file_exists(public_path($data->foto))) ? asset($data->foto) : asset('images/no-business.svg') }}" alt="event thumb" class="img img-thumbnail align-top">
                </div>
                <div class="col-md-8 col-lg-8 mt-50 mb-50">
                    
                    
                    <h3 style="color:#000;">{{ $data->acara }}</h3>
                    <hr>
                    <div style="overflow:auto">
                    {!! $data->keterangan !!}
                </div>
                <ul class="list-inline">
                    <div class="row">
                        <div class="col-3">

                            <li class="list-inline-item ">
                                <div class="d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">

                                            <i class="fa fa-map-marker text-success icon-md mr-2"></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">

                                            <div class="text-left">
                                                <h6 class="mb-0">HARI</h6>
                                                <p class="mb-0">{{only_day($data->tanggal)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-4">

                            <li class="list-inline-item ">
                                <div class="d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">

                                            <i class="fa fa-calendar text-success icon-md mr-2"></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">

                                            <div class="text-left">
                                                <h6 class="mb-0">TANGGAL</h6>
                                                <p class="mb-0">{{convert_tgl1($data->tanggal)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-5">

                            <li class="list-inline-item ">
                                <div class="d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4">

                                            <i class="fa fa-clock-o text-success icon-md mr-2"></i>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">

                                            <div class="text-left">
                                                <h6 class="mb-0">WAKTU</h6>
                                                <p class="mb-0">{{ $data->jam }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>

                </ul>
            </div>
        </div>


    </div>
</section>
@endsection