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
      
    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      
        <!-- Import Font -->
        <style type="text/css">
           @font-face {
                font-family: "AP-R";
                src: url('../assets/font/Apercu-Pro-Regular.otf');
            }
           @font-face {
                font-family: "AP-M";
                src: url('../assets/font/Apercu-Pro-Medium.otf');
            }
           @font-face {
                font-family: "AP-L";
                src: url('../assets/font/Apercu-Pro-Light.otf');
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
            </div>
        </div>
      
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">Slide 1</div>
                          <div class="swiper-slide">Slide 2</div>
                          <div class="swiper-slide">Slide 3</div>
                          <div class="swiper-slide">Slide 4</div>
                          <div class="swiper-slide">Slide 5</div>
                          <div class="swiper-slide">Slide 6</div>
                          <div class="swiper-slide">Slide 7</div>
                          <div class="swiper-slide">Slide 8</div>
                          <div class="swiper-slide">Slide 9</div>
                          <div class="swiper-slide">Slide 10</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-3 aktivitas-terbaru">
                    <h4>Aktivitas Baru-Baru Ini</h4>
                    <br>
                    <ul class="col-12">
                        <li>
                            <div class="row">
                                <div class="col-3 img-terbaru"><img src="{{url('assets/img/akun.jpg')}}"></div>
                                <div class="col-9 info-terbaru">
                                    <h6>Ucup Lawless</h6>
                                    <p>16 Menit yang lalu</p>
                                    <p>Baru-baru ini Berkomentar di <a href="">"Judul Buku"</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 img-terbaru"><img src="{{url('assets/img/akun.jpg')}}"></div>
                                <div class="col-9 info-terbaru">
                                    <h6>Ucup Lawless</h6>
                                    <p>16 Menit yang lalu</p>
                                    <p>Baru-baru ini Berkomentar di <a href="">"Judul Buku"</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 img-terbaru"><img src="{{url('assets/img/akun.jpg')}}"></div>
                                <div class="col-9 info-terbaru">
                                    <h6>Ucup Lawless</h6>
                                    <p>16 Menit yang lalu</p>
                                    <p>Baru-baru ini Berkomentar di <a href="">"Judul Buku"</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 img-terbaru"><img src="{{url('assets/img/akun.jpg')}}"></div>
                                <div class="col-9 info-terbaru">
                                    <h6>Ucup Lawless</h6>
                                    <p>16 Menit yang lalu</p>
                                    <p>Baru-baru ini Berkomentar di <a href="">"Judul Buku"</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
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
      
    <div class="all-book">
        <div class="container">
            <div class="row">
                <div class="col-12 sort">
                    <div class="row">
                    <div class="sort-by">
                        <label for="sort-by">Sort By</label>
                        <select id="sort-by" name="sort-by">
                          <option value="">Newst Book</option>
                          <option value="">Name A - Z</option>
                          <option value="">Name Z - A</option>
                        </select>
                    </div>
                    <div class="genre">
                        <label for="genre">Genre</label>
                        <select id="genre" name="genre">
                          <option value="">Religi</option>
                          <option value="">Nasionalisme</option>
                          <option value="">Mandiri</option>
                          <option value="">Gotong Royong</option>
                          <option value="">Integritas</option>
                        </select>
                    </div>
                    </div>
                </div>

                @foreach($buku as $row)
                <div class="col-3 box-book">
                    <div class="row justify-content-md-center">
                        <div class="col-8 book">
                            <div class="cover-book">
                                <center><img width="125" height="184" src="../upload/cover/{{$row->cover}}"></center>
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
  </body>
</html>