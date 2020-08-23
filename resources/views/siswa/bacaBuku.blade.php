<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <!-- Swiper Carousel CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
      
    <link rel="stylesheet" href="{{url('assets/css/option-swiper.css')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/home.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/genre-book.css')}}">
    <link rel="stylesheet" href="{{url('css/starrate.css')}}">
      
    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      
        <!-- Import Font -->
        <style type="text/css">
           @font-face {
                font-family: "AP-R";
                src: url('../../assets/font/Apercu-Pro-Regular.otf');
            }
           @font-face {
                font-family: "AP-M";
                src: url('../../assets/font/Apercu-Pro-Medium.otf');
            }
           @font-face {
                font-family: "AP-L";
                src: url('../../assets/font/Apercu-Pro-Light.otf');
            }
        </style>

    <title>PERPUSTAKAAN</title>
  </head>
  <body>
        
        <div class="navbar col-md-12" id="navbar">
            <div class="container">
                <div class="logo col-md-4"><a href="home.html"><img id="logo" src="{{url('assets/img/logo.png')}}"></a>
                </div>
                <div class="search col-md-4">
                   <a href=""><i class="fas fa-search"></i> </a> <input type="text" placeholder=" Cari Buku" class="input-search">
                </div>
                <ul class="menu col-md-3">
                    <li class="list-menu"><a href="#" class="dropbtn">Materi</a>
                        <ul>
                            <li><a href="#" class="dropbtn2">Novel</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Religi</a></li>
                                    <li><a href="" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Cerpen</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Religi</a></li>
                                    <li><a href="" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Puisi</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Religi</a></li>
                                    <li><a href="" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Drama</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Religi</a></li>
                                    <li><a href="" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Hikayat / Cerita Rakyat</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Religi</a></li>
                                    <li><a href="" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="list-menu"><a href="#" class="dropbtn">Aktivitas</a>
                        <ul>
                            <li><a href="#" class="dropbtn2">Novel</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Mengulas</a></li>
                                    <li><a href="" class="dropbtn2">Menyajikan</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Cerpen</a>
                                <ul>
                                    <li><a href="" class="dropbtn2">Mengidentifikasi</a></li>
                                    <li><a href="" class="dropbtn2">Menganalisis</a></li>
                                    <li><a href="" class="dropbtn2">Mengontruksi</a></li>
                                    <li><a href="" class="dropbtn2">Laporan Membaca</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Puisi</a>
                            </li>
                            <li><a href="#" class="dropbtn2">Drama</a>
                            </li>
                            <li><a href="#" class="dropbtn2">Hikayat / Cerita Rakyat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-menu"><a href="#" class="dropbtn">Jurnal</a>
                    </li>
                </ul>
                <div class="akun col-md-1">
                        <a class="dropbtn"><img src="{{url('assets/img/akun.jpg')}}"> <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="">Profil</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>
                </div>
            </div>
        </div>
      
   <!--  <div class="pdf-viewer">
        <div>
          <button id="prev">Previous</button>
          <button id="next">Next</button>
          &nbsp; &nbsp;
          <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
        </div>

        <canvas id="the-canvas"></canvas>
    </div> -->
      
    <div class="header-read-book">
        <div class="container">
            <div class="row">
                <div class="col-3 cover-book-read">
                    <img src="../../upload/cover/{{$buku->cover}}">
                </div>
                <div class="col-6 content-book-read">
                    <h3>{{$buku->judul}}</h3>
                    <p class="creator">Oleh {{$buku->nama}}</p>
                                <div id="parent1">
                                    <?php 
                                        for ($i=1; $i <= $buku->rate ; $i++) { 
                                          echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star text-primary"></i>
                                            </i>';
                                        }
                                        for ($i=0; $i < (5-$buku->rate) ; $i++) { 
                                            echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>';
                                        }
                                    ?>
                                </div>
                    <h6>Sinopsis</h6>
                    <p class="synopsis">{{$buku->sinopsis}}</p>
                </div>
                <div class="col-3 btn-book-read">
                    <a href="" class="btn-save"><i class="fas fa-bookmark"></i> Simpan</a>
                </div>
            </div>
        </div>
    </div>
      
    <div class="comment-section">
        <div class="container">
            <div class="row">
                <div class="col-12 review">
                    <div class="col-12 title-review">
                        <h4>Ulasan</h4>
                    </div>
                    <div class="col-12 write-review">
                        <div class="row">
                            <div class="col-1 profile-account"><img src="../../assets/img/akun.jpg"></div>
                            <div class="col-11 input-write-review">
                                <span class="my-rating-9"></span>
                                <span class="live-rating"></span>
                                <textarea placeholder="Tulis komentar Mu" id="textComment"></textarea>
                                <button class="btn-send" onclick="submitComment('{{$buku->id}}')">Kirim</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 box-content-review">
                        <div class="col-12 content-review">
                            <div class="row">
                                <div class="col-12 content-review-book">
                                    <ul class="col-12 listComment">
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 footer-review">
                        <a href="">Komentar lainnya <i class="fas fa-chevron-down"></i></a>
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
                                <center><img width="125" height="184" src="../../upload/cover/{{$row->cover}}"></center>
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
      

    <!-- Optional JavaScript -->
      
    <!-- Swiper Carousel JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      
    <script src="{{url('assets/js/option-swiper.js')}}"></script>
    
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.js"></script>

    <script src="{{url('js/starrate.js')}}"></script>
    <script src="{{url('js/timeElapsed.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js" integrity="sha512-Vvbhrrw9oPzjTUUbw+bw/P1mMW9NW2H21DhoajJW69XzOBhICUlI5rywBcy7SI8Y5Dc9v+oIe5lXwQX0PauUCA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.worker.min.js" integrity="sha512-2OTk0xqsNt9LEecFvW5JNqT2b5a5tS6Kvbo8giRkoZ5KmhrBrc330Bsz8MPa4LC5Yfu5hKdA37zumLUgU5MonA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf_viewer.min.css" integrity="sha512-vk0oOEzVuyEFl83Wn3bljSgvUun5V0YeE4frdjit9DiiM09yEsD+hRzhwGQ1N/ccfLTzUCfO5uvgJHOSXYtbWA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.worker.entry.min.js" integrity="sha512-NJEHr6hlBM4MkVxJu+7FBk+pn7r+KD8rh+50DPglV/8T8I9ETqHJH0bO7NRPHaPszzYTxBWQztDfL6iJV6CQTw==" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            getDataComment();
           
        });
        var rate=3;
        $(".my-rating-9").starRating({
            initialRating: rate,
            starShape: 'rounded',
            starSize: 20,
            useFullStars:true,
            disableAfterRate: false,
            onHover: function(currentIndex, currentRating, $el){
              console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
              $('.live-rating').text(currentIndex);
              rate=currentRating;
            },
            onLeave: function(currentIndex, currentRating, $el){
              console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
              $('.live-rating').text(currentRating);
              rate=currentRating;

            }
          });

        function getDataComment() {
            
            var id = '{{$buku->id}}';
            console.log(id);
            $.ajax({
                  url:"../comment/"+id,
                  type:'post',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{id:id},
                  success: function (data) {
                    $('.listComment').empty();
                    for (var i = 0 ; i < data.length; i++) {
                        $('.listComment').append('<li>'
                                            +'<div class="row">'
                                              +'<div class="col-1 profile-account"><img src="../../assets/img/akun.jpg"></div>'
                                                +'<div class="col-8 content-profile-review">'
                                                    +'<h6>'+data[i]['nama']+'</h6>'
                                                    +'<p class="time" data-time="'+data[i]['created_at']+'">'+data[i]['created_at']+'</p>'
                                                    +'<p>'+data[i]['comment']+'</p>'
                                                +'</div>'
                                                +'<div class="col-3 rating-review">'
                                                   +' <div id="parent1'+data[i]['id']+'" class="content-rating-review">'
                                                       
                                                    +'</div>'
                                                +'</div>'
                                            +'</div>'
                                        +'</li>');
                        $('.time').timeElapsed({
                          currentTime:new Date,
                          postfix:"ago"
                        });

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
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });
        }

                

        function submitComment(id) {
            console.log(rate);
            console.log($('#textComment').val());
           $.ajax({
                  url:"../comment/tambah",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{id:id,rate:rate,komen:$('#textComment').val()},
                  success: function (data) {
                    alert('berhasil Menambahkan Comment');
                    getDataComment();
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });
        }
        

// pdf
var url = "{{url('upload/pdf/'.$buku->pdf)}}";
var pdfDoc = null,
    pageNum = 1,
    pageRendering = false,
    pageNumPending = null,
    scale = 0.8,
    canvas = document.getElementById('the-canvas'),
    ctx = canvas.getContext('2d');

/**
 * Get page info from document, resize canvas accordingly, and render page.
 * @param num Page number.
 */
function renderPage(num) {
  pageRendering = true;
  // Using promise to fetch the page
  pdfDoc.getPage(num).then(function(page) {
    var viewport = page.getViewport({scale: scale});
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    // Render PDF page into canvas context
    var renderContext = {
      canvasContext: ctx,
      viewport: viewport
    };
    var renderTask = page.render(renderContext);

    // Wait for rendering to finish
    renderTask.promise.then(function() {
      pageRendering = false;
      if (pageNumPending !== null) {
        // New page rendering is pending
        renderPage(pageNumPending);
        pageNumPending = null;
      }
    });
  });

  // Update page counters
  document.getElementById('page_num').textContent = num;
}

/**
 * If another page rendering in progress, waits until the rendering is
 * finised. Otherwise, executes rendering immediately.
 */
function queueRenderPage(num) {
  if (pageRendering) {
    pageNumPending = num;
  } else {
    renderPage(num);
  }
}

/**
 * Displays previous page.
 */
function onPrevPage() {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
}
document.getElementById('prev').addEventListener('click', onPrevPage);

/**
 * Displays next page.
 */
function onNextPage() {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
}
document.getElementById('next').addEventListener('click', onNextPage);

/**
 * Asynchronously downloads PDF.
 */
pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
  pdfDoc = pdfDoc_;
  document.getElementById('page_count').textContent = pdfDoc.numPages;

  // Initial/first page rendering
  renderPage(pageNum);
});
    </script>
    
  </body>
</html>