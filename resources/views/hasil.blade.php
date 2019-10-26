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
                    <a href="{{ route('depan') }}" class="submit-btn">Klik disini untuk mengulangi Pencarian <i class="fa fa-check-square"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="header-form-area">
                    <div class="make-offer-form">
                        @if (Session::has('sukses'))

                            <form method="post" action="#">
                                
                                <h3 class="color-white">Hasil Verifikasi : <span class="color-green">Data ditemukan  <i class="fa fa-check-square-o"></i></span></h3>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                            <input type="text" class="form-control" value="Perguruan Tinggi : STIE IBMT Surabaya" readonly>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="Nama : {{ $data->nama_mahasiswa }}" readonly="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="Nomor Mahasiswa : {{ $data->nim }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="Jenjang Pendidikan : {{ explode(' ', trim($data->program_studi))[0] }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="Program Studi : {{ explode(' ', trim($data->program_studi))[1] }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="No Ijazah : {{ $data->no_ijazah }}" readonly="">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                            <input type="text" class="form-control" value="Tanggal Lulus : {{ date('d-m-Y', strtotime($data->tgl_lulus)) }}" readonly="">
                                        </div>
                                    </div>

                                </div>

                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--=====/Header-area=====-->

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