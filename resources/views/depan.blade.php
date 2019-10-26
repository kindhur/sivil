<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--title-->
        <title>SIVIL - DITJEN BELAMAWA - KEMENRISTEKDIKTI</title>

        <script src="{{ asset('js/pace.min.js') }}"></script>
        <link href="{{ asset('css/pace-theme-corner-indicator.css') }}" rel="stylesheet">

        <!-- css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/color.css') }}" rel="stylesheet">

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:500,600,700" rel="stylesheet">
        
    </head>

    <body class="  pace-done" data-gr-c-s-loaded="true" sip-shortcut-listen="true">
        <div class="pace  pace-inactive">
            <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>

    <div class="content">

    <!--=====Header-area=====-->
        <section id="header-area" class="header-area overlay-section">
            
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                <div class="header-text-area">
                    <img src="{{ asset('img/logosivil.png') }}">
                    <h5 class="color-white value-established">Untuk memastikan keabsahan ijazah anda, pastikan nomor ijazah anda dapat diverifikasi melalui SIVIL.
                    <br>Pastikan anda mengisi Perguruan Tinggi, Nomor Ijazah dan Angka pengaman dengan benar. <br>Apabila nomor ijazah anda tidak terdaftar, silakan hubungi Perguruan Tinggi yang menerbitkan ijazah untuk memastikan data anda telah dilaporkan melalui PD-DIKTI.</h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="header-form-area">
                    <div class="make-offer-form">
                        <form method="post" action="{{ route('depan') }}">
                        @csrf @method('POST')
                        <h3 class="color-white">Formulir Verifikasi</h3>

                            @if (Session::has('gagal'))
                                <hr>
                                <h4 class="color-orange">Data tidak ditemukan / Pastikan anda telah mengisi nama PT dan Program Studi yang benar <i class="fa fa-warning"></i></h4>
                                <hr>
                            @endif

                            @if (Session::has('salah'))
                                <hr>
                                <h4 class="color-orange">Angka Pengaman tidak sama <i class="fa fa-warning"></i></h4>
                                <hr>
                            @endif

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                        <input type="text" class="form-control" placeholder="Perguruan Tinggi : 073075 - STIE IBMT Surabaya" required="" autocomplete="on" disabled>
                                        <input type="hidden" name="kodept" value="073075">
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                        <div>
                                            <select name="kode_prodi" class="form-control" required>
                                                <option value="">Program Studi ... </option>
                                                <option value="61201">S1 - Manajemen</option>
                                                <option value="61101">S2 - Manajemen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                        <input type="text" class="form-control" name="no_ijazah" placeholder="Nomor Ijazah" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                        <input type="text" class="form-control" name="pengaman" placeholder="Angka Pengaman : {{ $angka[0] }} + {{ $angka[1] }} = " required="">
                                        <input type="hidden" name="kunci" value="{{ collect($angka)->sum() }}">
                                    </div>
                                </div>
                                <button type="submit" class="submit-btn">VERIFIKASI <i class="fa fa-check-square"></i></button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--=====/Header-area=====-->

    <!--=====Footer=====-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="copyright-text">© All Rights Reserved</div>
                </div>
                <div class="col-xs-5 text-right"></div>
            </div>
        </div>
    </footer>
    <!--=====/footer=====-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.js"><\/script>')
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mockjax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.autocomplete.js') }}"></script>
    </body>
</html>