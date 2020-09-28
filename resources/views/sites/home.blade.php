@extends('layout.frontend')

@section('content')

@section('title', 'SMK YPF Bandung')
        <!-- start banner Area -->
        <section class="banner-area relative" id="home" style="background: url('{{ config('sekolah.image_banner_url') }}');">
            <div class="overlay overlay-bg"></div>	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-between">
                    <div class="banner-content col-lg-9 col-md-12">
                        <h1 class="text-uppercase">
                            SMK nya Para Juara <br>
                            Ya, SMK YPF			
                        </h1>
                        <p class="pt-10 pb-10" style= "color: #ffff">
                           Ingin tahu lebih dalam tentang kami, klik Selengkapnya
                        </p>
                        <a href="/" class="primary-btn text-uppercase">Selengkapnya</a>
                    </div>										
                </div>
            </div>					
        </section>
        <!-- End banner Area -->
    
        <!-- Start upcoming-event Area -->
        <section class="upcoming-event-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Kegiatan Kami</h1>
                        </div>
                    </div>
                </div>								
                <div class="row">
                    <div class="active-upcoming-event-carusel">
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="{{ asset('/frontend') }}/img/1.jpg" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                                <a href="#"><h4>Siswa SMK YPF Sedang Membuat 
                                Selai Dari Bunga Rosella</h4></a>
                                <p>
                                    Klik untuk info selanjutnya
                                </p>
                            </div>
                        </div>
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="{{ asset('/frontend') }}/img/2.jpg" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                                <a href="#"><h4>Siswa SMK YPF Berhasil
                                Membuat Jamu dari Bahan Dasar Jahe</h4></a>
                                <p>
                                    Klik untuk Info selanjutnya 
                                </p>
                            </div>
                        </div>	
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="{{ asset('/frontend') }}/img/3.jpg" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                                <a href="#"><h4>Siswa SMK YPF Berhasil 
                                Membuat Masker Wajah Alami dari Buah Bengkuang</h4></a>
                                <p>
                                    Klik untuk Info selanjutnya
                                </p>
                            </div>
                        </div>																							
                    </div>
                </div>
            </div>	
        </section>
        <!-- End upcoming-event Area -->

        <!-- Start popular-course Area -->
        <section class="popular-course-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Prestasi Kami</h1>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="active-popular-carusel">
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/Juara 1.jpg" alt="">
                                </div>								
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 2 Lomba Cerdas Cermat Farmasi 
                                    </h4>
                                </a>
                                <p>
                                    Di POLTEKKES Tahun 2017										
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/UNPAD.jpg" alt="">
                                </div>									
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 1 Lomba Karya Tulis
                                    </h4>
                                </a>
                                <p>
                                   Di Universitas Padjajaran pada ajang UNPAD Farmasi 2017										
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/LKS.jpg" alt="">
                                </div>									
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 1 LKS Bidang Farmasi
                                    </h4>
                                </a>
                                <p>
                                    Tingkat Provinsi JABAR Tahun 2017
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/JUARA 2B.jpg" alt="">
                                </div>								
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                       Juara 2 Lomba Racik Obat
                                    </h4>
                                </a>
                                <p>
                                    Di Universitas Padjajaran pada ajang UNPAD Farmasi 2017	
                                </p>
                            </div>
                        </div>
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/22.jpg" alt="">
                                </div>								
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 2 Lomba Racik Obat 
                                    </h4>
                                </a>
                                <p>
                                    Di Universitas Padjajaran pada ajang UNPAD Farmasi 2016
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/5.jpg" alt="">
                                </div>								
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 1 LKS Bidang Farmasii
                                    </h4>
                                </a>
                                <p>
                                   Tingkat Kotamadya Tahun 2016
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/6.jpg" alt="">
                                </div>									
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 1 LKS Bidang Farmasi
                                    </h4>
                                </a>
                                <p>
                                    Tingkat Kotamadya Tahun 2017						
                                </p>
                            </div>
                        </div>	
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{ asset('/frontend') }}/img/7.jpg" alt="">
                                </div>									
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        Juara 1 STBFC
                                    </h4>
                                </a>
                                <p>
                                    Tingkat Kotamadya Tahun 2018										
                                </p>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>	
        </section>
        <!-- End popular-course Area -->

        <!-- Start blog Area -->
        <section class="blog-area section-gap" id="blog">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Baraya SMK YPF</h1>
                            <p>Semua Berita tentang kami ada disini</p>
                        </div>
                    </div>
                </div>					
                <div class="row">
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/UAS.jpg" alt="">								
                        </div>
                        <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                        <a href="blog-single.html">
                            <h5>Selamat Liburan Kenaikan Kelas 🤩</h5>
                        </a>
                        <p>
                            Selamat Liburan adik-adik pelajar semuanya… Tetap jalankan protokol kesehatan yaa !!
                        </p>
                        <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span>
                            <span class="lnr lnr-arrow-right"></span></a>		
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/Berbagi.jpg" alt="">								
                        </div>
                        <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                        <a href="blog-single.html">
                            <h5>OSIS SMK YPF Bandung berbagi ditengah Pandemi</h5>
                        </a>
                        <p>
                            19 Mei 2020 Teman-teman OSIS SMK YPF Bandung sudah melaksanakan program rutin Yaitu
                        </p>
                        <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/spanduk.jpg" alt="">								
                        </div>
                        <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                        <a href="blog-single.html">
                            <h5>SMK YPF Bandung tanggap Covid 19</h5>
                        </a>
                        <p>
                            SMK YPF Bandung mendukung upaya Pemprov Jabar untuk menekan penyebaran covid 19.
                        </p>
                        <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
                    </div>
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/guru.jpg" alt="">								
                        </div>
                        <p class="meta">03 Juli <script>document.write(new Date().getFullYear());</script> | By <a href="#">Admin</a></p>
                        <a href="blog-single.html">
                            <h5>Semua anak bisa Sekolah, Semua anak bisa Juara !</h5>
                        </a>
                        <p>
                            Para guru dan karyawan SMK YPF Bandung SIAP menyambut peserta didik baru Come and Join Us ! 
                        </p>
                        <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
                    </div>							
                </div>
            </div>	
        </section>
        <!-- End blog Area -->		


@endsection