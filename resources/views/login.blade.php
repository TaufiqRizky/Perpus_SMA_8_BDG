<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('assets/css/index.css')}}">
      
        <!-- Import Font -->
        <style type="text/css">
           @font-face {
                font-family: "AP-R";
                src: url("{{url('assets/font/Apercu-Pro-Regular.otf')}}");
            }
           @font-face {
                font-family: "AP-M";
                src: url("{{url('assets/font/Apercu-Pro-Medium.otf')}}");
            }
        </style>

    <title>PERPUSTAKAAN</title>
  </head>
  <body>
      <section class="col-12 login">
            <div class="row">
                <div class="col-lg-6 img-login">
                    <img src="assets/img/logo.png">
                </div>
                <div class="col-lg-6 content-login">
                    <div class="col-12 form-login">
                        <form class="col-8" method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="caption-welcome">
                                <h2>Selamat Datang</h2>
                                <p>Perpustakaan Online untuk siswa dan siswi SMA Pasundan 8 Bandung</p>
                            </div>
                            <table class="col-12">
                                <tr>
                                    <td colspan="2"><p class="text-sign-in">Sign in</p></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="email" class="col-12 id-pass" name="email" placeholder="Email" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="password" class="col-12 id-pass" name="password" placeholder="Password" required></td>
                                </tr>
                                <tr>
                                    <td><a href="lupa-password.html">Lupa Password ?</a></td>
                                    <td><input type="submit" value="Masuk" class="btn-masuk"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="daftar">Tidak punya akun ? <button type="button" class="" data-toggle="modal" data-target="#exampleModal">Daftar</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
      </section>
      
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Silahkan hubungi admin yang bersangkutan</p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
  </body>
</html>