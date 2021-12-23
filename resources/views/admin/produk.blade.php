@extends('admin.master')

@section('style')
    <link rel="stylesheet" href="{{ asset('templates/admin/assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('templates/admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">

@endsection
@section('content')
<div class="card">
        <div class="card-header">
            <h5 class="text-center">DATA PRODUK</h5>
            <hr>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-{{session('alert')}} text-center">{{session('message')}}</div>
            @endif                  
            <DIV class="table-responsive ">
                <table class="table rounded table-striped table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Nama Barang</th>
                            <th>Slug</th>
                            <th>Ket. Singkat</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <tbody>
                            
                @foreach($datas as $data)
                <tr> 
                    <td><img src="{{asset($data->foto)}}" class="img-thumbnail"></td>
                    <td>{{$data->nama_brg}}</td>
                    <td>{{$data->slug}}</td>
                    <td>{!!$data->keterangan_singkat!!}</td>
                    <td>{{number_format($data->harga)}}</td>
                    <td>
                        <a href="#" class="edit" id="e-{{$data->id}}" alt="Edit"><i class="fa fa-lg fa-edit text-info" alt="edit"></i></a>
                        <a href="/admin/produk/delete/{{$data->id}}"  id="e-{{$data->id}}" alt="Delete"><i class="fa fa-lg fa-trash text-danger"></i></a> 
                        <a href="/produk/{{$data->slug}}"" alt="Show" target="_Blank"><i class="fa fa-lg fa-eye text-dark"></i></a>
                </tr>
                @endforeach
                </tbody>
                </table>
                   
            </div>
            
        </div>
        <div class="card-footer">
            <div class="row justify-content-center">
                <a href="#" class="btn btn-sm btn-info text-center" id="inputData"><i class="fa fa-pencil "></i> Input Data</a>
            </div> 
        </div>
    </div>
   </div>

<div class="modal" tabindex="-1" role="dialog" id="inputmodal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form  action="{{route('save_produk')}}" method="Post" enctype="multipart/form-data">    
            @csrf
        <div class="modal-header">
          <h5 class="modal-title">Input Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="container-fluid m-0 p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" class="form-control input-default @error('nama_brg')is-invalid @enderror" placeholder="Nama Barang" id="nama_brg" name="nama_brg">
                                                @error('nama_brg')
                                                <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Barang</label>
                                                <input type="text" class="form-control input-default @error('harga')is-invalid @enderror" placeholder="Harga Barang" id="harga" name="harga">
                                                @error('harga')
                                                <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Penjelasan Singkat</label>
                                                <textarea  class="form-control input-default @error('keterangan_singkat')is-invalid @enderror"  id="myeditor1" name="keterangan_singkat" rows=5></textarea>
                                                <br>
                                                <a href="#" id="btn-myeditor1" class="btn btn-sm btn-info btnEditor" >Editor</a>
                                                @error('keterangan_singkat')
                                                <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Penjelasan Detil</label>
                                                <textarea  class="form-control input-default @error('keterangan')is-invalid @enderror" id="myeditor" name="keterangan" rows=5></textarea>
                                                <br>
                                                <a href="#" id="btn-myeditor" class="btn btn-sm btn-info btnEditor" >Code</a>
                                         
                                                @error('keterangan')
                                                <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Photo Produk</label>
                                                <input type="file" name="foto" id="foto" class="form-control input-default @error('foto')is-invalid @enderror" placeholder="Foto">
                                                @error('foto')
                                                <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
        <div class="modal-footer">
          <input type="submit" id="btnOk" class="btn btn-primary" value="Proses">
          <button type="button" id="btnClose" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <div class="modal" tabindex="-1" role="dialog" id="editmodal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <form  action="{{route('update_produk')}}" method="Post" enctype="multipart/form-data">    
            @csrf
        <div class="modal-header">
          <h5 class="modal-title">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

           
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input type="text" class="form-control input-default @error('nama_brg')is-invalid @enderror" placeholder="Nama Barang" id="edit_nama" name="nama_brg">
                                            <input type="hidden" id="edit_id" name="id">
                                            @error('nama_brg')
                                            <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Barang</label>
                                            <input type="text" class="form-control input-default @error('harga')is-invalid @enderror" placeholder="Harga Barang" id="edit_harga" name="harga">
                                            @error('harga')
                                            <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Penjelasan Singkat</label>
                                            <textarea  class="form-control input-default @error('keterangan_singkat')is-invalid @enderror" placeholder="Keterangan singkat" id="myeditor21" name="keterangan_singkat" rows=5></textarea>
                                            <br>
                                            <a href="#" id="btn-myeditor21" class="btn btn-sm btn-info btnEditor" >Editor</a>
                                            @error('keterangan_singkat')
                                            <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label>Penjelasan Detil</label>
                                            <textarea  class="form-control input-default  @error('keterangan')is-invalid @enderror" placeholder="Keterangan Detil" id="myeditor2" name="keterangan" rows=5></textarea>
                                            <br>
                                            <a href="#" id="btn-myeditor2" class="btn btn-sm btn-info btnEditor" >Code</a>
                                            @error('keterangan')
                                            <div class="text-danger mt-1 font-italic">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                           
                                            <label>Photo Produk</label>
                                            <br><img src="" class="img img-thumbnail" id="foto1" style="width:100px">
                                            <br><input type="text" class="form-control input-default"   id="foto_exist" name="foto_exist">
                                       
                                            <input type="file" class="form-control input-default"  id="edit_foto" name="foto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
        </div>
        <div class="modal-footer">
          <input type="submit" id="btnOk" class="btn btn-primary" value="Proses">
          <button type="button" id="btnClose" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
   <script src="{{ asset('templates/admin/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('templates/admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('templates/admin/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  
  <!-- Page Specific JS File -->
  <script src="{{ asset('templates/admin/assets/js/page/datatables.js')}}"></script>
   
    <script >
    $(document).ready(function(){
        $("#mytable").DataTable();
        
        CKEDITOR.replace('myeditor',{
            height:200,
            filebrowserUploadUrl:"{{route('ckeditor.upload', ['_token' => csrf_token() ])}} " ,
            filebrowserBrowseUrl:"{{asset('/admin/file_browse?path=images')}}" ,
            filebrowserUploadMethod: "form"
        })
         CKEDITOR.config.removeButtons = 'Save,Print,ExportPdf,Templates,NewPage,Preview,Scayt,About'
            $.fn.modal.Constructor.prototype._enforceFocus = function() {
                modal_this = this
                $(document).on('focusin', function (e) {
                    if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length 
                    && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') 
                    && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                    modal_this.$element.focus()
                    }
                })
                };


       
        $("#inputData").click(function(){
            $("#inputmodal").modal();
        })
        $(".edit").click(function(){
            var idnya=$(this).attr('id').split('-');
            var id=idnya[1];

           var url="<?PHP echo env('APP_URL');?>/";
            
            $.ajax({
                type:'get',
                method:'get',
                url:'/admin/produk/find/'  + id ,
                data:'_token = <?php echo csrf_token() ?>'   ,
                success:function(hsl) {
                    $("#foto1").attr('src','');
                   if (hsl.error){
                       alert(hsl.message);

                   } else{
                    $("#edit_nama").val(hsl.nama_brg);
                        $("#edit_bisnis").val('');
                        $("#edit_harga").val(0);
                         $("textarea#myeditor21").val('');
                         $("textarea#myeditor2").val('');
                         $("#edit_id").val(id);
                         $("#foto1").attr('src','');
                         $("#foto_exist").val('');
                         $("#editmodal").modal();


                        $("#edit_nama").val(hsl.nama_brg);
                        $("#edit_harga").val(hsl.harga);
                        $('#edit_bisnis option[value=' + hsl.bisnis_id + ']').attr('selected','selected');
                        
                         $("textarea#myeditor21").val(hsl.keterangan_singkat);
                         $("textarea#myeditor2").val(hsl.keterangan);
                         $("#edit_id").val(id);
                         $("#foto1").attr('src',url +  hsl.foto);
                         $("#foto_exist").val(hsl.foto);
                         CKEDITOR.replace('myeditor2',{
                            height:200,
                            filebrowserUploadUrl:"{{route('ckeditor.upload', ['_token' => csrf_token() ])}} " ,
                            filebrowserBrowseUrl:"{{asset('/admin/file_browse?path=images')}}" ,
                            filebrowserUploadMethod: "form"
                        })
                        
                         $("#editmodal").modal();
                   }
                }
            });
            
        })

        $(".btnEditor").click(function(){
            var caption=$(this).html();
            var a_id=$(this).attr('id').split('-');
            var id=a_id[1];
            if (caption=="Editor"){

                CKEDITOR.replace(id,{
                                height:200,
                                filebrowserUploadUrl:"{{route('ckeditor.upload', ['_token' => csrf_token() ])}} " ,
                                filebrowserBrowseUrl:"{{asset('/admin/file_browse?path=images')}}" ,
                                filebrowserUploadMethod: "form"
                            })
                $(this).html('Code');            
            }else{
                $(this).html('Editor');            
                CKEDITOR.instances[id].destroy();

            }
        })
    })
    </script>
@endsection