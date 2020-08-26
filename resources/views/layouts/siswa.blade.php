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
      
    <!-- Icon CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      
        <!-- Import Font -->
        <style type="text/css">
           @font-face {
                font-family: "AP-R";
                src: url('{{url("assets/font/Apercu-Pro-Regular.otf")}}');
            }
           @font-face {
                font-family: "AP-M";
                src: url('{{url("assets/font/Apercu-Pro-Medium.otf")}}');
            }
           @font-face {
                font-family: "AP-L";
                src: url('{{url("assets/font/Apercu-Pro-Light.otf")}}');
            }

        </style>
        @yield('css')
    <title>PERPUSTAKAAN</title>
  </head>
  <body>
        
        <div class="navbar col-md-12" id="navbar">
            <div class="container">
                <div class="logo col-md-4"><a href="{{url('siswa/dashboard')}}"><img id="logo" src="{{url('assets/img/logo.png')}}"></a>
                </div>
                <div class="search col-md-4">
                   <a href=""><i class="fas fa-search"></i> </a> <input type="text" placeholder=" Cari Buku" class="input-search">
                </div>
                <ul class="menu col-md-3">
                    <li class="list-menu"><a href="#" class="dropbtn">Materi</a>
                        <ul>
                            <li><a href="#" class="dropbtn2">Novel</a>
                                <ul>
                                    <li><a href="{{url('siswa/genre/novel/religi')}}" class="dropbtn2">Religi</a></li>
                                    <li><a href="{{url('siswa/genre/novel/nasionalisme')}}" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="{{url('siswa/genre/novel/mandiri')}}" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="{{url('siswa/genre/novel/gotong')}}" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="{{url('siswa/genre/novel/integritas')}}" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Cerpen</a>
                                <ul>
                                    <li><a href="{{url('siswa/genre/cerpen/religi')}}" class="dropbtn2">Religi</a></li>
                                    <li><a href="{{url('siswa/genre/cerpen/nasionalisme')}}" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="{{url('siswa/genre/cerpen/mandiri')}}" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="{{url('siswa/genre/cerpen/gotong')}}" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="{{url('siswa/genre/cerpen/integritas')}}" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Puisi</a>
                                <ul>
                                    <li><a href="{{url('siswa/genre/puisi/religi')}}" class="dropbtn2">Religi</a></li>
                                    <li><a href="{{url('siswa/genre/puisi/nasionalisme')}}" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="{{url('siswa/genre/puisi/mandiri')}}" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="{{url('siswa/genre/puisi/gotong')}}" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="{{url('siswa/genre/puisi/integritas')}}" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Drama</a>
                                <ul>
                                    <li><a href="{{url('siswa/genre/drama/religi')}}" class="dropbtn2">Religi</a></li>
                                    <li><a href="{{url('siswa/genre/drama/nasionalisme')}}" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="{{url('siswa/genre/drama/mandiri')}}" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="{{url('siswa/genre/drama/gotong')}}" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="{{url('siswa/genre/drama/integritas')}}" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Hikayat / Cerita Rakyat</a>
                                <ul>
                                    <li><a href="{{url('siswa/genre/hikayat/religi')}}" class="dropbtn2">Religi</a></li>
                                    <li><a href="{{url('siswa/genre/hikayat/nasionalisme')}}" class="dropbtn2">Nasionalisme</a></li>
                                    <li><a href="{{url('siswa/genre/hikayat/mandiri')}}" class="dropbtn2">Mandiri</a></li>
                                    <li><a href="{{url('siswa/genre/hikayat/gotong')}}" class="dropbtn2">Gotong Royong</a></li>
                                    <li><a href="{{url('siswa/genre/hikayat/integritas')}}" class="dropbtn2">Integritas</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="list-menu"><a href="#" class="dropbtn">Aktivitas</a>
                        <ul>
                            <li><a href="#" class="dropbtn2">Novel</a>
                                <ul>
                                    <li><a href="{{url('siswa/novel/aktivitas/mengulas')}}" class="dropbtn2">Mengulas</a></li>
                                    <li><a href="{{url('siswa/novel/aktivitas/menyajikan')}}" class="dropbtn2">Menyajikan</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="dropbtn2">Cerpen</a>
                                <ul>
                                    <li><a href="{{url('siswa/novel/aktivitas/identifikasi')}}" class="dropbtn2">Mengidentifikasi</a></li>
                                    <li><a href="{{url('siswa/novel/aktivitas/analisis')}}" class="dropbtn2">Menganalisis</a></li>
                                    <li><a href="#" class="dropbtn2">Mengontruksi</a></li>
                                    <li><a href="#" class="dropbtn2">Laporan Membaca</a></li>
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
                    <li class="list-menu"><a href="{{url('siswa/jurnal')}}" class="dropbtn">Jurnal</a>
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
      
        @yield('isi')      

    <!-- Optional JavaScript -->
      
    <!-- Swiper Carousel JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      
    <script src="{{url('assets/js/option-swiper.js')}}"></script>
      
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    

    @yield('js')
  </body>
</html>