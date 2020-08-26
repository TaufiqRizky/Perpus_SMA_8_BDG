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
                    <th>Siswa</th>
                    <th>Judul Buku</th>
                    <th>Subject</th>
                    <th>{{ucfirst($aktifitas)}}</th>
                    <th>Action</th>
                  </tr> 
                  </thead>
                  <tbody id="tbodyy">
                    @foreach($buku as $row => $val)
                    <tr class="item{{$val->id}}">
                      <td>{{$row+1}}</td>
                      <td>{{$val->nama}}</td>
                      <td>{{$val->judul}}</td>
                      <td>{{$val->subject}}</td>
                      <td>{{$val->ulasan}}</td>
                      <td class="js-sweetalert">
                                            
                          <button class="btn btn-info " data-toggle="modal" data-id="{{$val->id}}" data-review="{{$val->review}}" onclick="setEdit('{{$val->id}}','{{$val->review}}')" data-target="#modalReview"><i class="fas fa-pencil-alt"></i> Review</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


            <!-- Modal -->
<div class="modal fade" id="modalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea class="form-control" id="txtReview" placeholder="Masukan Hasil Review"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary " onclick="Save()">Save changes</button>
      </div>
    </div>
  </div>
</div>

            
          
@endsection
@section('css')
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('plugins/sweetalert2/sweetalert2.min.css')}}">
  
@endsection

@section('js')


<script src="{{url('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
  var idulas;
$(document).ready(function () {

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

function setEdit(id,review) {
  $('#txtReview').val(review);
  console.log(id);
  idulas=id;
      
}

function Save() {
  console.log(idulas+' '+$('#txtReview').val());
  $.ajax({
          url:"../addReview",
          type:'POST',
          headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
          data:{id:idulas,review:$('#txtReview').val()},
          success: function (data) {
           swal.fire(
                              'Berhasil!',
                              'Berhasil Memberikan review',
                              'success'
                            );
            setTimeout(location.reload.bind(location), 1500);
              },
              error: function (data) {
                  alert('gagal');
              }
      });
}

  
  
</script>
@endsection
