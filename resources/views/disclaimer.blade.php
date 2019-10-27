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
                <div class="col-md-12">
                <div class="header-text-area">
                    <img src="{{ asset('img/logosivil.png') }}">
                    <h5 class="color-white value-established"><span>Semua data yang ditampilkan pada laman ini, adalah berasal dari pelaporan data perguruan tinggi STIE IBMT SURABAYA, dilarang mengubah dan menghapus data tanpa ada permintaan dari perguruan tinggi. Apabila ada pihak lain yang ingin memanfaatkan data ini untuk kepentingan umum agar mengajukan perijinan terlebih dahulu ke STIE IBMT Surabaya.</span></h5><br/>
                    <a href="{{ route('depan') }}" class="submit-btn"><i class="fa fa-home"></i> Beranda</a>
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
                    <div class="copyright-text"><a href="#" class="copyright-text">© All Rights Reserved</a></div>
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