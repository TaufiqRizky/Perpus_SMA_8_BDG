@extends('layouts.siswa')
@section('css')
    <link rel="stylesheet" href="{{url('assets/css/aktivitas.css')}}">

@endsection
@section('isi')      
    <div class="comment-section sudah-dibaca">
        <div class="container">
            <div class="row">
                <div class="col-12 review">
                    <div class="col-12 title-review padding-ulasan-buku">
                        <h4>Ulas buku yang telah kamu baca</h4>
                    </div>
            <div class="row justify-content-md-center">
              @foreach($buku as $row)
                <div class="col-3 box-book">
                    <div class="row justify-content-md-center">
                        <div class="col-8 book">
                            <div class="cover-book">
                                <center><img width="125" height="184" src="../../../upload/cover/{{$row->cover}}"></center>
                            </div>
                            <div class="info-book">
                                <h6>{{$row->judul}}</h6>
                                <p>{{$row->nama}}</p>
                                <div id="parent1">
                                    <?php 
                                        for ($i=1; $i <= $row->rate ; $i++) { 
                                          echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star text-primary"></i>
                                            </i>';
                                        }
                                        for ($i=0; $i < (5-$row->rate) ; $i++) { 
                                            echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>';
                                        }
                                    ?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="read-book">
                        <center><a href="#" class="btn-read" onclick="getUlas('{{$row->id}}')">Ulas</a></center>
                    </div>
                </div>
                @endforeach
                
                
            </div>
                </div>
            </div>
        </div>
    </div>
      
    <div class="comment-section ulasann">
        <div class="container">
            <div class="row">
                <div class="col-12 review">
                    <div class="col-12 title-review">
                        <h4>Ulasan</h4>
                    </div>
                    <div class="row info-book-aktivitas">
                        <div class="col-3 cover-book-read">
                            <img src="assets/img/cover-book.png">
                        </div>
                        <div class="col-9 content-book-read">
                            <h3 id="jdl">Berserk</h3>
                            <p class="creator">Oleh Kentaro Miura</p>
                                        <div id="bintang">
                                            <i class="star star-under fa fa-star">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>
                                            <i class="star star-under fa fa-star">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>
                                            <i class="star star-under fa fa-star">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>
                                            <i class="star star-under fa fa-star">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>
                                            <i class="star star-under fa fa-star">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>
                                        </div>
                            <h6>Sinopsis</h6>
                            <p class="synopsis isisinop">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Quam nulla porttitor massa id neque aliquam.</p>
                            <h6 class="subject">Subject</h6>
                            <p class="synopsis isisub">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Quam nulla porttitor massa id neque aliquam.</p>
                            <h6 class="ulasannnn">Ulasan</h6>
                            <p class="synopsis isiulasannn" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dapibus ultrices in iaculis nunc sed augue lacus. Quam nulla porttitor massa id neque aliquam.</p>
                        </div>
                    </div>
                    <div class="col-12 write-review" >
                        <table class="col-12">
                            <tr class="row">
                                <td class="col-3">Subjek</td>
                                <input type="text" id="idBuku" hidden class="col-12">
                                <td class="col-9 input-text"><input type="text" id="txtSubject" class="col-12"></td>
                            </tr>
                            <tr class="row">
                                <td class="col-3">Ulasan</td>
                                <td class="col-9 input-text"><textarea id="txtUlasan" class="col-12"></textarea></td>
                            </tr>
                            <tr>
                                <td class="col-12"><a href="#" class="btn-send">Ulas</a></td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 @endsection     

    
@section('js')
    <script type="text/javascript">
       $('.ulasann').hide();
       var idBuku;

       function getUlas(id) {
        idBuku=id;
         $.ajax({
                  url:"../getNovel/"+id,
                  type:'get',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{},
                  success: function (data) {
                    console.log(data);
                    $('#jdl').empty();
                    $('#jdl').append(data['buku']['judul']);
                    $('.creator').empty();
                    $('.creator').append('oleh '+data['buku']['nama']);
                    $('.isisinop').empty();
                    $('.isisinop').append(data['buku']['sinopsis']);
                    $('#bintang').empty();
                    for (var j = 1;  j<= Math.round(data['buku']['rate']); j++) {
                            $('#bintang').append('<i class="star star-under fa fa-star ">'
                                                +'<i class="star star-over fa fa-star text-primary"></i>'
                                            +'</i>');
                        }
                        for (var x = 1;  x<= (5-Math.round(data['buku']['rate'])); x++) {
                            $('#bintang').append('<i class="star star-under fa fa-star ">'
                                                +'<i class="star star-over fa fa-star "></i>'
                                            +'</i>');
                        }
                    $('.cover-book-read').empty();
                    $('.cover-book-read').append('<img src="../../../upload/cover/'+data['buku']['cover']+'">');


                    if (data['ulas'] != null) {
                      console.log('isi');
                      $('.isisub').empty();
                      $('.isiulasannn').empty();
                      $('.isiulasannn').append(data['ulas']['ulasan']);
                      $('.isisub').append(data['ulas']['subject']);
                   
                      $('.btn-send').hide();
                      $('.write-review').hide();
                      $('.subject').show();
                      $('.isisub').show();
                      $('.ulasannnn').show();
                      $('.isiulasannn').show();

                    }else{
                      $('.subject').hide();
                      $('.isisub').hide();
                      $('.ulasannnn').hide();
                      $('.isiulasannn').hide();
                      $('.write-review').show();
                      $('.btn-send').show();

                      console.log('kosong');
                    }
                    $('.ulasann').show();
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });

         $( ".btn-send" ).click(function() {
           $.ajax({
                  url:"../ulasan/tambah",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{id:idBuku,ulasan:$('#txtUlasan').val(),subject:$('#txtSubject').val()},
                  success: function (data) {
                    alert('berhasil Menambahkan ulasan');
                    setTimeout(location.reload.bind(location), 1500);
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });
          });
       }
    </script>
@endsection