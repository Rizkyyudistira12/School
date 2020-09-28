<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/frontend') }}/img/ypf.png">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/linearicons.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/nice-select.css">							
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/owl.carousel.css">			
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/jquery-ui.css">			
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/main.css">
    </head>
    <body>	
      <header id="header" id="home">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo" style="background-color: #ffff">
                <a href="/"><img src="{{ asset('admin/assets/logo.png') }}" width="250px" height="100px" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="/">Home</a></li>
                  <li><a href="/about">Profil Kami</a></li>
                  <li><a href="/register">PPDB</a></li>
                  <li class="menu-has-children"><a href="">Masuk</a>
                    <ul>
                      <li><a href="/login">Guru</a></li>
                      <li><a href="/login">Siswa</a></li>
                    </ul>
                  </li>	
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->

     

      @yield('content')
                    
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-footer-widget">
                            <img src="{{ asset('admin/assets/logo.png') }}" width="250px" height="auto">
                            <p style= "color: #ffff" >Guiding the Generation Supporting Enhancement of Nation's Competitiveness. 
                                Berdiri tahun 2013 dan sudah terakreditasi "A" 
                                dengan menghasilkan lulusan yang berkualitas sehingga langsung diserap oleh industri.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-footer-widget">
                            <h4>Informasi</h4>
                            <ul style= "color: #ffff">
                                <li><i class=" fa fa-map-marker"> &nbsp; Jl. Cisaranten Kulon No.105 Arcamanik (Depan Polsek Arcamanik)</i></li>
                                <li><i class=" fa fa-phone"> &nbsp; (022) 7834514</i></li>
                                <li><i class="fa fa-envelope">&nbsp; mail@smkypfbdg.sch.id</i></li>
                                <li><i class="fa fa-calendar">&nbsp; Senin - Jumat 07:00 - 15.30</i></li>
                            </ul>								
                        </div>
                    </div>											
                </div>
                <div class="footer-bottom row align-items-center justify-content-between">
                    <p class="footer-text m-0 col-lg-6 col-md-12" style="color: #ffff"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="#" target="_blank">SMK YPF Bandung</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-6 col-sm-12 footer-social">
                        <a href="https://m.facebook.com/SMK-Farmasi-YPF-Bandung-476848495708865/"><i class="fa fa-facebook"></i></a>
                        <a href="https://mobile.twitter.com/smkfarmasi_ypf?lang=en"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/ofcsmkypfbdg?igshid=1w4zu0432zbod"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>						
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="{{ asset('/frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('/frontend') }}/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ asset('/frontend') }}/js/easing.min.js"></script>			
        <script src="{{ asset('/frontend') }}/js/hoverIntent.js"></script>
        <script src="{{ asset('/frontend') }}/js/superfish.min.js"></script>	
        <script src="{{ asset('/frontend') }}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/jquery.magnific-popup.min.js"></script>	
        <script src="{{ asset('/frontend') }}/js/jquery.tabs.min.js"></script>						
        <script src="{{ asset('/frontend') }}/js/jquery.nice-select.min.js"></script>	
        <script src="{{ asset('/frontend') }}/js/owl.carousel.min.js"></script>									
        <script src="{{ asset('/frontend') }}/js/mail-script.js"></script>	
        <script src="{{ asset('/frontend') }}/js/main.js"></script>	
    </body>
</html>