<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 08:06:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMKN 1 Garut</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('tampilan/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/animate.min.css')}}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('tampilan/css/font-awesome.min.css')}}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('tampilan/vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/meanmenu.min.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/vendor/slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('tampilan/vendor/slider/css/preview.css')}}" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/jquery.datetimepicker.css')}}">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/magnific-popup.css')}}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/hover-min.css')}}">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/css/reImageGrid.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('tampilan/style.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('tampilan/js/modernizr-2.8.3.min.js')}}"></script>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-textPrimary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <img class="img-responsive" src="{{asset('tampilan/img/logo.png')}}" alt="logo" style="height:50px; width:50px">
                                    
                               </div>
    
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                            <nav id="desktop-nav">
                                <ul>
    
                                    <li><a href="/">Home</a>
                                    <li><a href="#">Tentang Sekolah</a>
                                        <ul>
                                        <li><a href="about">Sambutan Kepala Sekolah</a>
                                        <li><a href="jurusan">Kompetensi Keahlian</a> <li>
                                        <a href="agenda">Agenda</a> 
                                        <li><a href="blog">Berita Sekolah</a>
                                        <li><a href="ekskul">Ekstrakulikuler</a>
                                        <li><a href="download">Informasi</a>
                                        </ul>
                                    </li>
                                     
                                    <li><a href="guru">Staf Guru</a><li>
                                    <li><a href="pegawai">Komite dan Staf Kependidikan</a>
                                    <li><a href="https://www.smknegeri1garut.sch.id/ppdbs/">Info PPDB</a>
                                    
                                    </ul>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                <a href="index.html"><img class="logo-mobile-menu" src="{{asset('tampilan/img/logo.png')}}" alt="logo" style="height:50px; width:50px"></a>
                                <ul>
    
                                    <li><a href="/">Home</a>
                                    <li><a href="#">Tentang Sekolah</a>
                                        <ul>
                                        <li><a href="about">Sambutan Kepala Sekolah</a>
                                        <li><a href="jurusan">Kompetensi Keahlian</a> <li>
                                        <a href="agenda">Agenda</a> 
                                        <li><a href="blog">Berita Sekolah</a>
                                        <li><a href="ekskul">Ekstrakulikuler</a>
                                        <li><a href="download">Informasi</a>
                                        </ul>
                                    </li>
                                     
                                    <li><a href="guru">Staf Guru</a><li>
                                    <li><a href="pegawai">Komite dan Staf Kependidikan</a>
                                    <li><a href="https://www.smknegeri1garut.sch.id/ppdbs/">Info PPDB</a>
                                    
                                    </ul>
                                
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Slider 1 Area Start Here -->



    @yield('content')


<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <a href="#"><img class="img-responsive" src="{{asset('tampilan/img/logo.png')}}"></a>
                        <div class="footer-about">
                            <p>SMK NEGERI 1 GARUT <br> JALAN CIMANUK NO 309 A
                            Kecamatan Tarogong Kidul
                            Kabupaten Garut
                            Provinsi Jawa Barat</p>
                        </div>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/SmkNegeri1Garut" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UClXQjtwnaRlwJV7-5kTNReQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/smkn1garut_official/?hl=id"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                    <h3>Link Terkait</h3>
                        <ul class="featured-links">
                            <li>
                                <ul>
                                <li><a href="https://jabarprov.go.id/" target="_blank">Pemerintah Provinsi Jawa Barat</a></li>
                                    <li><a href="https://www.garutkab.go.id/" target="_blank">Pemerintah Kabupaten Garut</a></li>
                                    <li><a href="https://www.smknegeri1garut.sch.id/ppdbs/" target="_blank">PPDB</a></li>
                                    <li><a href="https://bnp2tki.go.id/" target="_blank">Lowongan Kerja</a></li>
                                    <li><a href="https://www.youtube.com/channel/UClXQjtwnaRlwJV7-5kTNReQ" target="_blank">Youtube SMKN 1 Garut</a></li>
                                   
                                </ul>
                            </li>
                           
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-box">
                        <h3>Informasi</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:(0262) 233316">(0262) 233316 </a></li>
                            <li><i class="fa fa-google" aria-hidden="true"></i>www.smknegeri1garut.sch.id</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <p><?php echo date('Y');?> © copyright SMK Negeri 1 Garut Created By <a target="_blank" href="http://andriansyah.my.id/">IT Staff</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
</div>
<!-- Main Body Area End Here -->
<!-- jquery-->
<script src="{{asset('')}}tampilan/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="{{asset('')}}tampilan/js/plugins.js" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="{{asset('')}}tampilan/js/bootstrap.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="{{asset('')}}tampilan/js/wow.min.js"></script>
<!-- Nivo slider js -->
<script src="{{asset('')}}tampilan/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="{{asset('')}}tampilan/vendor/slider/home.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="{{asset('')}}tampilan/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="{{asset('')}}tampilan/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="{{asset('')}}tampilan/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="{{asset('')}}tampilan/js/jquery.counterup.min.js"></script>
<script src="{{asset('')}}tampilan/js/waypoints.min.js"></script>
<!-- Countdown js -->
<script src="{{asset('')}}tampilan/js/jquery.countdown.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="{{asset('')}}tampilan/js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Magic Popup js -->
<script src="{{asset('')}}tampilan/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!-- Gridrotator js -->
<script src="{{asset('')}}tampilan/js/jquery.gridrotator.js" type="text/javascript"></script>
<!-- Custom Js -->
<script src="{{asset('')}}tampilan/js/main.js" type="text/javascript"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 08:06:35 GMT -->
</html>
