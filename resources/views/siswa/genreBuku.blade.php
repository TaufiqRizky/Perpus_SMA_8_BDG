@extends('layouts.siswa')
@section('css')
@endsection
@section('isi')      
    <div class="header-genre-book">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8 content-genre-book">
                    <div class="row">
                        <div class="col-7 box-header-genre">
                            <h1>{{ucfirst($jenis)}} {{ucfirst($genre)}}</h1>
                        </div>
                        <div class="col-5 box-header-genre">
                            <img src="{{url('assets/img/img-header-genre.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    <div class="recommended-book">
        <div class="container">
            <h4>Rekomendasi Buku</h4>
            <div class="row justify-content-md-center">
                @foreach($rekomen as $row)
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
                        <center><a href="{{url('siswa/baca/'.$row->id)}}" class="btn-read">Baca</a></center>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
      
    <div class="all-book">
        <div class="container">
            <div class="row">
                <div class="col-12 sort">
                    <div class="row">
                    <div class="sort-by">
                        <label for="sort-by">Sort By</label>
                        <select id="sort-by" name="sort-by" onchange="getDataBuku()">
                          <option selected value="terbaru">Newst Book</option>
                          <option value="asc">Name A - Z</option>
                          <option value="desc">Name Z - A</option>
                        </select>
                    </div>
                    
                    </div>
                </div>
                <div id="list-buku" class="col-12 row">
                    
                </div>
                
               
            </div>
        </div>
    </div>
 @endsection     

    
@section('js')
    <script type="text/javascript">
        var jenis,genre;
        $( document ).ready(function() {
             jenis='{{$jenis}}';
             genre='{{$genre}}';
            console.log(jenis+" "+genre);
            getDataBuku();
           
        });

        function getDataBuku() {
            

            $.ajax({
                  url:"../../getBuku/genre2",
                  type:'post',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{sort:$('#sort-by').val(),genre:genre,jenis:jenis},
                  success: function (data) {
                    
                    setData(data);
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });
            
            
        }

        function setData(data){
             $('#list-buku').empty();
            for (var i = 0 ; i < data.length; i++) {
                        $('#list-buku').append('<div class="col-3 box-book">'
                                +'<div class="row justify-content-md-center">'
                                    +'<div class="col-8 book">'
                                        +'<div class="cover-book">'
                                            +'<center><img width="125" height="184" src="../../../upload/cover/'+data[i]['cover']+'"></center>'
                                        +'</div>'
                                        +'<div class="info-book">'
                                            +'<h6>'+data[i]['judul']+'</h6>'
                                            +'<p>'+data[i]['nama']+'</p>'
                                            +'<div id="parent1'+data[i]['id']+'">'
                                            +'</div>'
                                        +'</div>'
                                    +'</div>'
                                +'</div>'
                                +'<div class="read-book">'
                                    +'<center><a href="../siswa/baca/'+data[i]['id']+'" class="btn-read">Baca</a></center>'
                                +'</div>'
                            +'</div>');
                        for (var j = 1;  j<= Math.round(data[i]['rate']); j++) {
                            $('#parent1'+data[i]['id']).append('<i class="star star-under fa fa-star ">'
                                                +'<i class="star star-over fa fa-star text-primary"></i>'
                                            +'</i>');
                        }
                        for (var x = 1;  x<= (5-Math.round(data[i]['rate'])); x++) {
                            $('#parent1'+data[i]['id']).append('<i class="star star-under fa fa-star ">'
                                                +'<i class="star star-over fa fa-star "></i>'
                                            +'</i>');
                        }
                        
                    }
        }
    </script>
@endsection