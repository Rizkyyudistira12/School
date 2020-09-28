@extends('layout.frontend')

@section('content')

@section('title', 'Profil Kami')

<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Profile Kami				
                </h1>	
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/about"> Profil Kami</a></p>
            </div>	
        </div>
    </div>
</section>
<br>
<br>	

<!-- Start info Area -->
<section class="info-area pb-120">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 no-padding info-area-left">
                <img class="img-fluid" src="{{ asset('/frontend') }}/img/profile.jpg" alt="">
            </div>
            <div class="col-lg-6 info-area-right">
                <h1>Profile Kami</h1>
                <p>SMK YPF Bandung didirikan pada tahun 1956, SMK YPF Bandung dulu bernama Nasionalisasi  ‘Sekolah Asisten Apoteker (SAA) Dr.Radjiman’ kepada ‘Dewan Guru – SAA’.</p>
                <br>
                <p>
                    Kemudian pada tahun 1960, berubah kembali namanya menjadi ‘Jajasan Pendidikan Pharmacie’ (JPP) sebagai penyelenggara ‘Sekolah Asisten Apoteker’ (SAA).
            SAA pada waktu itu berlokasi di Jl. Centeh No.5 – Bandung.
                </p>
                <br>
                <p>
                    Sampai akhrinya pada tahun 1963 - 1967 berubah nama kembali menjadi ‘SAA – JPP’ bekerja sama mendidik siswa dari Angkatan Darat (AD) dan Angkatan Udara RI (AURI).
                </p>
                <br>
                <p>
                    Pada Tahun 1970, 	‘SAA – JPP’ berganti nama menjadi ‘Sekolah Menengah Farmasi – Yayasan Pendidikan Farmasi’ (SMF – YPF).
                    SAA - JPP pindah kampus yang dulu berlokasi di Jl. Centeh no 5 menjadi di Jl. Taman Siswa No.4 – Bandung.
                    Hingga pada awal tahun 1970 an pindah kampus kembali ke Jl. Cilentah 30 Buah Batu – Bandung. 
                    Kemudian pada awal tahun 2000 an, SMF -YPF pindah kampus kembali ke Jl. Suka Senang VI No.27 – Bandung.
                </p>
                <br>
                <p>
                    Hingga pada tahun 2009, Berganti nama kembali dari ‘SMF – YPF’  beralih bina dari DEPKES RI ke DISDIK menjadi ‘SMK – YPF’.
           pada tahun 2009, SMK YPF pindah kampus kembali ke 	Jl. Cisaranten Kulon No.105 – Bandung sampai saat ini. Hingga pada tahun 2011 sampai sekarang, ‘Yayasan Pendidikan Farmasi’ mendirikan  ‘Akademi Farmasi – YPF’.
                </p>
            </div>
        </div>
    </div>	
</section>
<!-- End info Area -->	

<!-- Start course-mission Area -->
<section class="course-mission-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Visi dan Misi</h1>
                    <p>SMK YPF Bandung</p>
                </div>
            </div>
        </div>							
        <div class="row">
            <div class="col-md-6 accordion-left">

                <!-- accordion 2 start-->
                <dl class="accordion">
                    <dt>
                        <a href="">Visi</a>
                    </dt>
                    <dd>
                        Menuju sekolah juara dan berjaya tahun 2025, memiliki jati diri, unggulan, andal, religius, dan amanah.
                    </dd>
                    <dt>
                        <a href="">Misi</a>
                    </dt>
                    <dd>
                        Menyelenggarakan pendidikan berkarakter untuk membentuk sikap dan perilaku yang berbudi luhur melalui kegiatan pembelajaran berbasis IPTEK dan IMTAQ.
                    </dd>                                 
                </dl>
                <!-- accordion 2 end-->
            </div>

            <div class="col-md-6 justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid mx-auto" src="{{ asset('/frontend') }}/img/Ukhti.jpg" alt=""></a>
            </div>
        </div>
    </div>	
</section>
<!-- End course-mission Area -->

       <!-- Start blog Area -->
       <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Developer Team</h1>
                    </div>
                </div>
            </div>					
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('/frontend') }}/img/Kiky.jpg" alt="">								
                    </div>
                    <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Muchammad Rizky Yudistira</h5>
                    </a>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">17170107</span>
                        <span class="lnr lnr-arrow-right"></span></a>		
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('/frontend') }}/img/Sandita.jpg" alt="">								
                    </div>
                    <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Sandita Gusniawan</h5>
                    </a>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">17170130</span><span class="lnr lnr-arrow-right"></span></a>						
                </div>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('/frontend') }}/img/Asad.jpg" alt="">								
                    </div>
                    <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                    <a href="blog-single.html">
                        <h5>Asad Adillah Akbar</h5>
                    </a>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">17170131</span><span class="lnr lnr-arrow-right"></span></a>									
                </div>							
            </div>
        </div>	
    </section>
    <!-- End blog Area -->		


@endsection