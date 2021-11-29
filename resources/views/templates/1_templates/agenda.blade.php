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
    <li class="breadcrumb-item active" aria-current="page">Agenda</li>
  </ol>
</nav>

<!-- section business -->
<section id="newsfeed" class="padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row justify-content-center">
                @if ($agenda_default->count()>0)
                @foreach ($agenda_default as $dt)
               <div class="col-md-4">
                  <div class="item">
                     <div class="news_wrap">
                        <a class="image" href="/agenda1/{{$dt->slug}}">
                            <img src="{{ asset($dt->foto) }}" alt="Webox">
                        </a>
                        <div class="news_box">
                           <h4 class="darkcolor font-light2"><a href="/agenda1/{{$dt->slug}}">{{$dt->acara}}</a></h4>
                           <ul class="commment">
                              <li><a href><i class="fa fa-calendar"></i>{{convert_tgl($dt->tanggal)}}</a></li>
                              <li><a href><i class="fa fa-clock-o"></i>{{$dt->jam}}</a></li>
                           </ul>
                        
                           <a href="/agenda1/{{$dt->slug}}" class="readmore">Lihat Detail</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
                @endif
                @if (session('level')>0)
                @if ($data->count()>0)

                @foreach ($data as $dt)
               <div class="col-md-4">
                  <div class="item">
                     <div class="news_wrap">
                        <a class="image" href="/agenda/{{$dt->slug}}">
                            <img src="{{ asset($dt->foto) }}" alt="Webox">
                        </a>
                        <div class="news_box">
                           <h4 class="darkcolor font-light2"><a href="/agenda/{{$dt->slug}}">{{$dt->acara}}</a></h4>
                           <ul class="commment">
                              <li><a href><i class="fa fa-calendar"></i>{{convert_tgl($dt->tanggal)}}</a></li>
                              <li><a href><i class="fa fa-clock-o"></i>{{$dt->jam}}</a></li>
                           </ul>
                        
                           <a href="/agenda/{{$dt->slug}}" class="readmore">Lihat Detail</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
                @endif
                @endif
            </div>
         </div>
      </div>
   </div>
</section>
@endsection