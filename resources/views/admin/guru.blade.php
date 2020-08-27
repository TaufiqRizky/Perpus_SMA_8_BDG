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
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr> 
                  </thead>
                  <tbody id="tbodyy">
                    @foreach($guru as $row => $val)
                    <tr class="item{{$val->user_id}}">
                      <td>{{$row+1}}</td>
                      <td>{{$val->nip}}</td>
                      <td>{{$val->nama}}</td>
                      <td>{{$val->alamat}}</td>
                      <td>{{$val->tgl_lahir}}</td>
                      <td>{{$val->jk}}</td>
                      <td class="js-sweetalert">
                                            
                                     <a class="btn btn-primary text-white" onclick="Edit('{{$val->nip}}','{{$val->nama}}','{{$val->alamat}}','{{$val->tgl_lahir}}','{{$val->jk}}','{{$val->email}}','{{$val->user_id}}')" > <i class="fas fa-pencil-alt"></i> Edit</a>
                                        
                                     <button class="btn btn-danger " data-id="{{$val->user_id}}" data-type="D_guru"><i class="far fa-trash-alt"></i> Hapus</button>
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
                    <h4 class="modal-title">Tambah Guru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" placeholder="Masukan nip">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="nama ">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkap">
                      </div>
                    </div>
                    
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukan email">
                      </div>
                      
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" class="form-control"></textarea>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                        <label for="tgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="jk ">Jenis Kelamin</label>
                        <select id="jk" class="form-control">
                          <option disabled selected>-- Pilih Jenis Kelamin --</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                          <option value="x">other</option>
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

              <div class="modal fade" id="modalEdit">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Guru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="enip">NIP</label>
                        <input type="text" class="form-control" id="enip" placeholder="Masukan nip">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="enama ">Nama</label>
                        <input type="text" class="form-control" id="enama" placeholder="Masukan nama lengkap">
                      </div>
                    </div>
                    
                      <div class="form-group">
                        <label for="eemail">Email address</label>
                        <input type="email" class="form-control" id="eemail" placeholder="Masukan email">
                      </div>
                      
                      <div class="form-group">
                        <label for="ealamat">Alamat</label>
                        <textarea id="ealamat" class="form-control"></textarea>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                        <label for="etgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="etgl" >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ejk ">Jenis Kelamin</label>
                        <select id="ejk" class="form-control">
                          <option disabled selected>-- Pilih Jenis Kelamin --</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                          <option value="x">other</option>
                        </select>
                      </div>
                      </div>
                      <input type="text" name="euser" id="euser" hidden>
              
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnUpdate">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            
            <button type="button" class="float btn-primary" data-toggle="modal" data-target="#modal-lg">
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
<script>
  var jml = 0;
  $(function () {
  jml = {{$jml}};

    
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
    if ($('#nip').val()==""||$('#nama').val()==""||$('#email').val()==""||$('#alamat').val()==""||$('#tgl').val()==""||$('#jk').val()=="") {
      swal.fire(
          'Warning',
          'Pastikan semua data terisi',
          'warning'
        );
    }else{

          $.ajax({
                  url:"guru/tambah",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{nip:$('#nip').val(),nama:$('#nama').val(),email:$('#email').val(),alamat:$('#alamat').val(),tgl:$('#tgl').val(),jk:$('#jk').val()},
                  success: function (data) {
                    console.log(data['id']);
                    jml=jml+1;
                    console.log(jml);
                   
                     swal.fire(
                      'Berhasil!',
                      'Data Guru berhasil di tambahkan',
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

  $('.btnUpdate').click(function() {
    console.log(jml);
    if ($('#enip').val()==""||$('#enama').val()==""||$('#eemail').val()==""||$('#ealamat').val()==""||$('#etgl').val()==""||$('#ejk').val()=="" ) {
      swal.fire(
          'Warning',
          'Pastikan semua data terisi',
          'warning'
        );
    }else{

          $.ajax({
                  url:"guru/update",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{nip:$('#enip').val(),nama:$('#enama').val(),email:$('#eemail').val(),alamat:$('#ealamat').val(),tgl:$('#etgl').val(),jk:$('#ejk').val(), user_id:$('#euser').val()},
                  success: function (data) {
                    console.log(data['id']);
                    jml=jml+1;
                    console.log(jml);
                   
                     swal.fire(
                      'Berhasil!',
                      'Data guru berhasil di ubah',
                      'success'
                    );
                     setTimeout(location.reload.bind(location), 1500);
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

  function Edit(nip,nama,alamat,tgl,jk,email,user) {
    $('#modalEdit').modal('show');
    $('#enip').val(nip);
    $('#enama').val(nama);
    $('#ealamat').val(alamat);
    $('#etgl').val(tgl);
    $('#ejk').val(jk);
    $('#eemail').val(email);
    $('#euser').val(user);
  }


  function Delete_guru(id) {
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
                  url:"guru/hapus/"+id,
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
           if (type === 'D_guru') {
              Delete_guru(id);
          }
       });
  
</script>
@endsection
