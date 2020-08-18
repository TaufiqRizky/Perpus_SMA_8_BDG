@extends('layouts.admin')

@section('head')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Guru</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
	<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Cover</th>
                    <th>Judul</th>
                    <th>Jenis</th>
                    <th>Genre</th>
                    <th>Sinopsis</th>
                    <th>Action</th>
                  </tr> 
                  </thead>
                  <tbody id="tbodyy">
                    @foreach($buku as $row => $val)
                    <tr class="item{{$val->id}}">
                      <td>{{$row+1}}</td>
                      <td><img width="70" height="110" src="{{url('upload/cover/'.$val->cover.'')}}"></td>
                      <td>{{$val->judul}}</td>
                      <td>{{$val->jenis}}</td>
                      <td>{{$val->genre}}</td>
                      <td>{{$val->sinopsis}}</td>
                      <td class="js-sweetalert">
                                            
                                     <a class="btn btn-primary " data-type="" href="{{ url('guru/buku/edit/'.$val->id) }}" > <i class="fas fa-pencil-alt"></i> Edit</a>
                                        
                                     <button class="btn btn-danger " data-id="{{$val->id}}" data-type="D_buku"><i class="far fa-trash-alt"></i> Hapus</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="modal fade" id="modal-lg">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   
                      <div class="form-group ">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukan Judul Buku">
                      </div>
                    <form method="post" id="upload_cover" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="cover">Cover</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file_cover" id="cover">
                            <label class="custom-file-label" for="cover">Choose file</label>
                          </div>
                        </div>
                     </div>
                   </form>
                   <form method="post" id="upload_pdf" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <div class="form-group">
                        <label for="cover">Pdf</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file_pdf" id="file_pdf">
                            <label class="custom-file-label" for="file_pdf">Choose file</label>
                          </div>
                        </div>
                     </div>
                   </form>
                    
                      <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea id="sinopsis" class="form-control"></textarea>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                        <label for="jenis ">Jenis</label>
                        <select id="jenis" class="form-control">
                          <option disabled selected>-- Pilih Jenis Buku --</option>
                          <option value="novel">Novel</option>
                          <option value="cerpen">Cerpen</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="genre ">genre</label>
                        <select id="genre" class="form-control">
                          <option disabled selected>-- Pilih Genre Buku --</option>
                          <option value="religi">Religi</option>
                          <option value="fiksi">Fiksi</option>
                        </select>
                      </div>
                      </div>
                      
              
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnSimpan">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            
            <button type="button" class="float btn-primary " data-toggle="modal" data-target="#modal-lg">
                 <i class="fa fa-plus  text-white"></i>
                </button>
@endsection
@section('css')
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('plugins/sweetalert2/sweetalert2.min.css')}}">
  <style type="text/css">
    .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:70px;
  right:40px;
  outline: none;
  
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
}
.float:focus {
  outline: none;
}

.my-float{
  margin-top:22px;
}
  </style>
@endsection

@section('js')


<script src="{{url('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
  var jml = 0;
  var pdf,cover;
  $(document).ready(function () {
  bsCustomFileInput.init();
 

    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
   });
  $('.btnSimpan').click(function() {
    console.log(jml);
    if ($('#judul').val()==""||$('#sinopsis').val()==""||$('#jenis').val()==""||$('#genre').val()==""||pdf==""||cover=="") {
      swal.fire(
          'Warning',
          'Pastikan semua data terisi',
          'warning'
        );
    }else{
      let myForm = document.getElementById('upload_cover');
      let myForm2=document.getElementById('upload_pdf');
      

         $.ajax({
           url:"{{ route('guru.uploadC') }}",
           method:"POST",
           data:new FormData(myForm),
           dataType:'JSON',
           contentType: false,
           cache: false,
           processData: false,
           success:function(data)
           {
            cover=data['name'];
            
            $.ajax({
               url:"{{ route('guru.uploadP') }}",
               method:"POST",
               data:new FormData(myForm2),
               dataType:'JSON',
               contentType: false,
               cache: false,
               processData: false,
               success:function(data)
               {
                  pdf=data['name'];
                  $.ajax({
                      url:"buku/tambah",
                      type:'POST',
                      headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                      data:{judul:$('#judul').val(),jenis:$('#jenis').val(),genre:$('#genre').val(),sinopsis:$('#sinopsis').val(),pdf:pdf,cover:cover},
                      success: function (data) {
                        
                            swal.fire(
                              'Berhasil!',
                              'Data buku berhasil di tambahkan',
                              'success'
                            );
                      },
                      error: function (data) {
                            swal.fire(
                              'Gagal!',
                              'data tidak berhasil di tambahkan',
                              'error'
                            );
                      }
                  });
                
               }
            });
           }
          });

         

         

         
      }
  });


  function Delete_buku(id) {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        $.ajax({
                  url:"buku/hapus/"+id,
                  type:'DELETE',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{id:id},
                  success: function (data) {
                     swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              );
                     $('.item'+id).fadeOut(1500, function(){ $(this).remove();});

                      },
                      error: function (data) {
                           swal.fire(
                  'Gagal!',
                  'Failed to delete your file.',
                  'error'
                );
                      }
              });
        
      } else if (
        
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    });
    
      
  }
  $('.js-sweetalert button').on('click', function () {
          var type = $(this).data('type');
           id=$(this).data('id');
           console.log(id);
           console.log(type);
           if (type === 'D_buku') {
              Delete_buku(id);
          }
       });


  
  
</script>
@endsection
