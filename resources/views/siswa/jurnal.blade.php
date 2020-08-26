@extends('layouts.siswa')
@section('css')
    <link rel="stylesheet" href="{{url('assets/css/jurnal.css')}}">

@endsection
@section('isi')      
    <div class="jurnal">
        <div class="container">
            <div class="row">
                <div class="col-7 box-jurnal">
                    
                    <div class="col-12 back-jurnal">
                        <div class="row">
                            
                            <div class="col-12 jurnal-cerpen">
                                <div class="col-12 title-jurnal">
                                    <h4>Novel</h4>
                                </div>
                                <div class="col-12 box-content-jurnal">
                                    <div class="col-12 content-jurnal">
                                        <div class="row">
                                            <div class="col-12 content-jurnal-book">
                                                <ul class="col-12">
                                                    @foreach($novel as $row)
                                                        @if($row->aktivitas == 'mengulas')
                                                    <li class="mengulas">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-comment-alt"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Mengulas</p>
                                                                <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                                <h6>{{$row->judul}}</h6>
                                                                <p class="synopsis-jurnal">{{$row->sinopsis}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @else
                                                    <li class="menyajikan">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-comment-alt"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Menyajikan</p>
                                                                <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                                <h6>{{$row->judul}}</h6>
                                                                <p class="synopsis-jurnal">{{$row->sinopsis}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 footer-jurnal">
                                    <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="col-12 jurnal-cerpen">
                                <div class="col-12 title-jurnal">
                                    <h4>Cerpen</h4>
                                </div>
                                <div class="col-12 box-content-jurnal">
                                    <div class="col-12 content-jurnal">
                                        <div class="row">
                                            <div class="col-12 content-jurnal-book">
                                                <ul class="col-12">
                                                    @foreach($cerpen as $row)
                                                        @if($row->aktivitas == 'identifikasi')
                                                    <li class="mengidentifikasi">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-search"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Mengidentifikasi</p>
                                                                <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                                <h6>{{$row->judul}}</h6>
                                                                <p class="synopsis-jurnal">{{$row->sinopsis}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @else
                                                    <li class="menganalisis">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-brain"></i></div>
                                                            <div class="col-11 content-info-jurnal">
                                                                <p class="title-info-jurnal">Menganalisis</p>
                                                                <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                                <h6>{{$row->judul}}</h6>
                                                                <p class="synopsis-jurnal">{{$row->sinopsis}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    <!-- <li class="mengontruksi">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-brain"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Mengontruksi</p>
                                                                <p class="time-jurnal">17 Menit yang lalu</p>
                                                                <h6>Nama Buku</h6>
                                                                <p class="synopsis-jurnal">Lorem ipsum Dolloer Ahmet Aje Deske Lam Lim Sam Noyhing bo Vrove</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="laporan-membaca">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-book-reader"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Laporan Membaca</p>
                                                                <p class="time-jurnal">17 Menit yang lalu</p>
                                                                <h6>Nama Buku</h6>
                                                                <p class="synopsis-jurnal">Lorem ipsum Dolloer Ahmet Aje Deske Lam Lim Sam Noyhing bo Vrove</p>
                                                            </div>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 footer-jurnal">
                                    <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="col-12 jurnal-puisi">
                                <div class="col-12 title-jurnal">
                                    <h4>Puisi</h4>
                                </div>
                                <div class="col-12 box-content-jurnal">
                                    <div class="col-12 content-jurnal">
                                        <div class="row">
                                            <div class="col-12 content-jurnal-book">
                                                <ul class="col-12">
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 footer-jurnal">
                                    <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="col-12 jurnal-drama">
                                <div class="col-12 title-jurnal">
                                    <h4>Drama</h4>
                                </div>
                                <div class="col-12 box-content-jurnal">
                                    <div class="col-12 content-jurnal">
                                        <div class="row">
                                            <div class="col-12 content-jurnal-book">
                                                <ul class="col-12">
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 footer-jurnal">
                                    <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="col-12 jurnal-hikayat">
                                <div class="col-12 title-jurnal">
                                    <h4>Hikayat /  Cerita Rakyat</h4>
                                </div>
                                <div class="col-12 box-content-jurnal">
                                    <div class="col-12 content-jurnal">
                                        <div class="row">
                                            <div class="col-12 content-jurnal-book">
                                                <ul class="col-12">
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 footer-jurnal">
                                    <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-5 box-jurnal">
                
                    <div class="col-12 back-jurnal">
                        <div class="col-12 title-jurnal no-border">
                            <h4>Buku Terbaru</h4>
                        </div>
                        <div class="col-12 box-content-jurnal">
                            <div class="col-12 content-jurnal">
                                <div class="row">
                                    <div class="col-12 content-jurnal-book">
                                        <ul class="col-12">
                                            @foreach($buku as $row)
                                            <li class="new-book">
                                                <div class="row">
                                                    <div class="col-1 info-icon-jurnal"><i class="fas fa-book"></i></div>
                                                    <div class="col-11 content-info-jurnal">
                                                        <p class="title-info-jurnal">Buku Baru</p>
                                                        <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                        <h6>{{$row->judul}}</h6>
                                                        <p class="synopsis-jurnal">{{$row->sinopsis}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                                    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 footer-jurnal">
                            <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                
                    <div class="col-12 back-jurnal">
                        <div class="col-12 title-jurnal no-border">
                            <h4>Komentar Terbaru</h4>
                        </div>
                        <div class="col-12 box-content-jurnal">
                            <div class="col-12 content-jurnal">
                                <div class="row">
                                    <div class="col-12 content-jurnal-book">
                                        <ul class="col-12">
                                            @foreach($comments as $row)
                                                    <li class="new-comment">
                                                        <div class="row">
                                                            <div class="col-1 info-icon-jurnal"><i class="fas fa-comment-alt"></i></div>
                                                            <div class="col-8 content-info-jurnal">
                                                                <p class="title-info-jurnal">Komentar Baru</p>
                                                                <p class="time-jurnal">{{\Carbon\Carbon::parse($row->created_at)->diffForHumans()}}</p>
                                                                <h6>{{$row->nama}}</h6>
                                                                <p class="synopsis-jurnal">{{$row->comment}}</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 footer-jurnal">
                            <a href="">Pemberitahuan Lainnya <i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 @endsection     

    
@section('js')
   
@endsection