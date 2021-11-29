@extends('admin.master')


@section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                      <h5 class="text-center">Selamat datang {{ $admin_data->nama }}</h5>
                      <p class="text-center">Berikut Profil Anda : </p>
                      <hr/>
                      <div class="row">
                      <div class="col-md-3 col-lg-3">
                      <img src="{{ asset($admin_data->foto)}}" class="img-thumbnail  shadow rounded-circle align-top " style="max-height:200px"><br>
                      </div>
                      <div class="col-md-9 col-lg-9">
                      @if (!@empty($admin_data->nama))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Nama</div>
                        <div class="col-8 text-left">: {{$admin_data->nama}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->pekerjaan))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Pekerjaan</div>
                        <div class="col-8 text-left">: {{$admin_data->pekerjaan}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->perusahaan))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Perusahaan </div>
                        <div class="col-8 text-left">: {{$admin_data->perusahaan}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->jabatan))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Jabatan</div>
                        <div class="col-8 text-left">: {{$admin_data->jabatan}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->alamat))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Alamat</div>
                        <div class="col-8 text-left">: {{$admin_data->alamat}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->kelurahan))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Kelurahan</div>
                        <div class="col-8 text-left">: {{$admin_data->kelurahan}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->subdistrict->subdistrict_name))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Kecamatan</div>
                        <div class="col-8 text-left">: {{$admin_data->subdistrict->subdistrict_name}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->city->city_name))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Kota/Kabupaten </div>
                        <div class="col-8 text-left">: {{$admin_data->city->city_name.' '.$admin_data->city->type}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->province->province_name))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Propinsi</div>
                        <div class="col-8 text-left">: {{$admin_data->province->province_name}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->kd_pos))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Kode Pos</div>
                        <div class="col-8 text-left">: {{$admin_data->kd_pos}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->telp))
                        <div class="row p-2" >
                        <div class="col-4 text-left">No Telp Rumah </div>
                        <div class="col-8 text-left">: {{$admin_data->telp}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->hp))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Handphone</div>
                        <div class="col-8 text-left">: {{$admin_data->hp}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->email))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Email</div>
                        <div class="col-8 text-left">: {{$admin_data->email}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->fb))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Facebook </div>
                        <div class="col-8 text-left">: {{$admin_data->fb}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->twitter))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Twitter</div>
                        <div class="col-8 text-left">: {{$admin_data->twitter}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->ig))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Instagram</div>
                        <div class="col-8 text-left">: {{$admin_data->ig}} </div>
                        </div>
                        @endif
                        @if (!@empty($admin_data->tube))
                        <div class="row p-2" >
                        <div class="col-4 text-left">Youtube Channel </div>
                        <div class="col-8 text-left"> <a href="https://www.youtube.com/channel/{{$admin_data->tube}}" target="_blank">https://www.youtube.com/channel/{{$admin_data->tube}} </a></div>
                        </div>
                        @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
 
<!--**********************************
    Content body end
***********************************-->
@stop


@section('script')
<script src="{{ asset('templates/admin/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templates/admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('templates/admin/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>    
@stop

@section('style')
<link href="{{ asset('templates/admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    
@endsection