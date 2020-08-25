@extends('layouts.siswa')
@section('css')
    <link rel="stylesheet" href="{{url('assets/css/genre-book.css')}}">
    <link rel="stylesheet" href="{{url('css/starrate.css')}}">
@endsection
@section('isi')      

      
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
                    <a href="#" class="btn-save" data-toggle="modal" data-target="#modalRate"><i class="fas fa-bookmark"></i> Rating</a>
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

    <div class="modal fade" id="modalRate" tabindex="-1" role="dialog" aria-labelledby="modalRate" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Rating Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if($rating == null)
        <span class="my-rating-9"></span>
        <span class="live-rating"></span>
        @else
        Anda sudah memberikan rating pada buku ini<br>
        <?php 
                                        for ($i=1; $i <= $rating->rate ; $i++) { 
                                          echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star text-primary"></i>
                                            </i>';
                                        }
                                        for ($i=0; $i < (5-$rating->rate) ; $i++) { 
                                            echo '<i class="star star-under fa fa-star ">
                                                <i class="star star-over fa fa-star"></i>
                                            </i>';
                                        }
                                    ?>
                                    {{$rating->rate}}.0
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         @if($rating == null)
        <button type="button" class="btn btn-primary" onclick="inputRating('{{$buku->id}}')">Save changes</button>
        @else
        <button type="button" class="btn btn-primary" onclick="inputRating('{{$buku->id}}')" disabled>Save changes</button>
        @endif

      </div>
    </div>
  </div>
</div>
          

    @endsection
    @section('js')
  
    
      

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
            starSize: 30,
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
                  data:{id:id,komen:$('#textComment').val()},
                  success: function (data) {
                    alert('berhasil Menambahkan Comment');
                    getDataComment();
                     },
                      error: function (data) {
                          alert('gagal');
                      }
              });
        }

        function inputRating(id) {
            console.log(rate);
            
           $.ajax({
                  url:"../rating/tambah",
                  type:'POST',
                  headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                  data:{id:id,rate:rate},
                  success: function (data) {
                    alert('berhasil Menambahkan Rating');
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
    
@endsection