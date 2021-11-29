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
    <li class="breadcrumb-item active" aria-current="page">Bisnis</li>
  </ol>
</nav>
<!-- section business -->
<section id="our-team" class="padding">
   <div class="container">
      <div class="row justify-content-center">
      @foreach ($bisnis_default as $bs)
      <div class="col-md-4">
         <div class="item">
         <a href="/bisnis1/{{$bs->slug}}">
            <div class="team-box firstcolor">
               <div class="image">
                  <img src="{{ asset($bs->logo)}}" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>{{ $bs->nama }}</h3>
                  <p class="nomargin">{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}</p>
               </div>
            </div>
            </a>
         </div>
      </div>
        @endforeach
        @if(session('level')>0)
        @foreach ($bisnis as $bs)
      <div class="col-md-4">
         <div class="item">
         <a href="/bisnis1/{{$bs->slug}}">
            <div class="team-box firstcolor">
               <div class="image">
                  <img src="{{ asset($bs->logo)}}" alt="">
               </div>
               <div class="team-content darkcolor">
                  <h3>{{ $bs->nama }}</h3>
                  <p class="nomargin">{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}</p>
               </div>
            </div>
        </a>
         </div>
      </div>
      @endforeach
      @endif
    </div>  
  </div>
</section>

@endsection