@extends('templates.singlepage.master')
@include('templates.singlepage.nav-content')
@section('content')
<section class="page-title">
    <div class="bg-overlay bg-black opacity-6"></div>
    <div class="container">
        <h2 class="hide-cursor">About Domba Presiden</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/{{ session('data')->username }}"><span class="icon fas fa-home"></span>Home</a></li>
            <li>About Domba Presiden</li>
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
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-10  wow slideInUp" data-wow-duration="2s">
                                @if (!@empty($member->welcome_note))
                                <h6 class="sub-title alt-font text-sec text-center"> {{$member->welcome_note->judul}}</h6>
                                <h2 class="title main-font text-main text-center my-4">{{$member->welcome_note->sub_judul}}</h2>
                                <p class="paragraph alt-font text-sec">{!!$member->welcome_note->welcome_note!!}</p>
                                @endif
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