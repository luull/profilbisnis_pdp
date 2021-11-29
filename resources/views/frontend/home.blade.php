@extends('frontend.master')
@section('banner')
<!-- <div class="banner-one" style="background-image: url(frontend/images/main-slider/slider1/pic2.png);">
			<div class="container">
				<div class="banner-inner">
					<div class="img1"><img src="{{asset('frontend/images/main-slider/slider1/pic3.png')}}" alt=""></div>
					<div class="img2"><img src="{{asset('frontend/images/main-slider/slider1/pic4.png')}}" alt=""></div>
					<div class="row align-items-center">
						<div class="col-md-7">
							<div class="banner-content">
								<h6 data-wow-duration="1s" data-wow-delay="0.5s" class="wow fadeInUp sub-title">WE CREATE IDEAS</h6>
								<h1 data-wow-duration="1.2s" data-wow-delay="1s" class="wow fadeInUp">HOW WE CAN HELP YOUR <span class="text-primary">BUSINESS</span></h1>
								<p  data-wow-duration="1.4s" data-wow-delay="1.5s" class="wow fadeInUp m-b30">Morbi sed lacus nec risus finibus feugiat et fermentum nibh. Pellentesque vitae ante at elit fringilla ac at purus.</p>
								<a  data-wow-duration="1.6s" data-wow-delay="2s" class="wow fadeInUp btn btn-primary" href="about-us-1.html" >Learn More<i class="fa fa-angle-right m-l10"></i></a>
							</div>
						</div>
						<div class="col-md-5">
							<div class="dz-media move-box wow fadeIn" data-wow-duration="1.6s" data-wow-delay="0.8s" >
								<img class="move-1" src="{{asset('frontend/images/main-slider/slider1/pic5.png')}}" alt=""/>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
@endsection

@section('content')
 <form action="{{route('find_member')}}" method="post"  >
    @csrf
   <div class="row justify-content-center" style="z-index:999 !important">
    <div class="col-12">
    <div class="form-group">
    <div class="input-group w-100">
        
        <input type="text" class="form-control" placeholder="Pencarian Profil Mitra " name="s">
        &nbsp;
        <div class="input-group-append ">
            <span class="input-group-text p-0 m-0">
                <button class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
            </span>
        </div>
    </div>
    </div>
    @if (!empty($error))
    <div class="row justify-content-center">
        <div class="col-12 alert alert-info text-center alert-dismissible fade show" role="alert">{!!$error!!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    </div>
    @endif
</div>
</div>
</form>


<div class="row">
            
       <!-- <div class="team-carousel2 owl owl-carousel owl-none owl-theme dots-style-1">-->
                 
             @foreach ($member_spesial as $item)
                 <div class="col-md-4">
                 
                     <div class="item m-0 shadow wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" >
                         
                         <div class="flip-bx dlab-team style-2 m-tb30">
                             <div class="front">
                                 <div class="inner text-white">
                                     <div class="dlab-media bg-primary">
                                         <Div class="row justify-content-between">
                                                                                                 <div class="m-2 ml-4">{!! QrCode::size(80)->generate(env('APP_URL').'/'.$item->username); !!}</div>

                                          
                                     <div class="text-white text-right p-3 mr-2">{{$item->KategoriPekerjaan->nama}}<br>{{$item->SubKategoriPekerjaan->nama}}</div>
                                         </div>
                                        <div style="background: #eee url({{asset('images/card-bg.jpg')}}); background-position:bottom;background-size:cover;height:250px !important;overflow:hidden">     
                                             <a href="{{env('APP_URL')}}/{{$item->username}}"><img src="{{asset($item->foto)}}" class="fluid" alt="" style="overflow:hidden" border=0>
                                            </div>
                                         <div class="p-3 text-white">{{$item->nama}} 
                                        </div></a>
                                     </div>
                                    
                                 </div>
                                  
                             </div>
                             <div class="back">
                                 <div class="inner text-white">
                                     <div class="dlab-content">
                                         
                                         <h4 class="dlab-name"><a href="{{env('APP_URL')}}/{{$item->username}}" style="color:#fff">{{$item->nama}}</a></h4>
                                         <span class="dlab-position mb-2 d-block"><a href="{{env('APP_URL')}}/{{$item->username}}" style="color:#fff">{{$item->pekerjaan}}<br>
                                         {{$item->perusahaan}}
                                        <br>
                                        <a href="/findmember/kategori-pekerjaan/{{$item->KategoriPekerjaan->nama}}" class="text-white">{{$item->KategoriPekerjaan->nama}}</a>/<a href="/findmember/sub-kategori-pekerjaan/{{$item->SubKategoriPekerjaan->nama}}" class="text-white">{{$item->SubKategoriPekerjaan->nama}}</a><br>
                                        <a href="/findmember/kota/{{$item->city->type}}-{{$item->city->city_name}}" class="text-white">{{$item->city->type}} {{$item->city->city_name}}</a> - <a href="/findmember/propinsi/{{$item->province->province}}" class="text-white">{{$item->province->province}}</a><br>
                                    Dikunjungi {{number_format($item->hits)}} Kali</a></span>
                                            <ul class="dlab-social-icon">
                                                <li><a href="https://facebook.com/{{$item->fb}}" class="fa fa-facebook"></a></li>
                                                <li><a href="https://instagram.com/{{$item->ig}}" class="fa fa-instagram"></a></li>
                                                <li><a href="https://twitter.com/{{$item->twitter}});" class="fa fa-twitter"></a></li>
                                                <li><a href="https://youtube.com/{{$item->tube}});" class="fa fa-twitter"></a></li>
                                            </ul>
                                     
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
           
              @foreach ($member_reguler as $item)
                 <div class="col-md-4">
                 
                     <div class="item shadow wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s" >
                         
                         <div class="flip-bx dlab-team style-2 m-tb30">
                             <div class="front">
                                 <div class="inner text-white">
                                     <div class="dlab-media bg-primary">
                                         <Div class="row justify-content-between">
                                                 <div class="m-2 ml-4">{!! QrCode::size(80)->generate(env('APP_URL').'/'.$item->username); !!}</div>
                                                    <div class="text-white text-right p-3 mr-3">{{$item->KategoriPekerjaan->nama}}<br>{{$item->SubKategoriPekerjaan->nama}}</div>
                                         </div>
                                          <div style="background: #eee url({{asset('images/card-bg.jpg')}}); background-position:bottom;background-size:cover;height:250px !important;overflow:hidden">    
                                            <a href="{{env('APP_URL')}}/{{$item->username}}"><img src="{{asset($item->foto)}}" class="fluid" alt="" style="overflow:hidden" border=0></a>
                                         </div>
                                         <a href="{{env('APP_URL')}}/{{$item->username}}"><div class="p-3 text-white">{{$item->nama}}
                                        </div></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="back">
                                 <div class="inner text-white">
                                     <div class="dlab-content">
                                         <h4 class="dlab-name"><a href="{{env('APP_URL')}}/{{$item->username}}" style="color:#fff">{{$item->nama}}</a></h4>
                                         <span class="dlab-position mb-2 d-block"><a href="{{env('APP_URL')}}/{{$item->username}}" style="color:#fff">{{$item->pekerjaan}}<br>
                                         {{$item->perusahaan}}<br>
                                         <a href="/findmember/kategori-pekerjaan/{{$item->KategoriPekerjaan->nama}}" class="text-white">{{$item->KategoriPekerjaan->nama}}</a>/<a href="/findmember/sub-kategori-pekerjaan/{{$item->SubKategoriPekerjaan->nama}}" class="text-white">{{$item->SubKategoriPekerjaan->nama}}</a><br>
                                     <a href="/findmember/kota/{{$item->city->type}}-{{$item->city->city_name}}" class="text-white">{{$item->city->type}} {{$item->city->city_name}}</a> - <a href="/findmember/propinsi/{{$item->province->province}}" class="text-white">{{$item->province->province}}</a><br>
                                     Dikunjungi {{number_format($item->hits)}} Kali</a></span>
                                         <ul class="dlab-social-icon">
                                             <li><a href="https://facebook.com/{{$item->fb}}" class="fa fa-facebook"></a></li>
                                             <li><a href="https://instagram.com/{{$item->ig}}" class="fa fa-instagram"></a></li>
                                             <li><a href="https://twitter.com/{{$item->twitter}});" class="fa fa-twitter"></a></li>
                                             <li><a href="https://youtube.com/{{$item->tube}});" class="fa fa-twitter"></a></li>
                                         </ul>
                                     
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
            
             
            
            
        <!--</div>-->
    
</div>
                
@endsection
