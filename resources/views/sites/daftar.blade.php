@extends('layout.frontend')

@section('content')

@section('title', 'Terima Kasih')

<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Terima Kasih 
                    Anda Sudah Terdaftar Sebagai Siswa/i SMK YPF Bandung	
                    <img src="{{ asset('/frontend') }}/img/Thanks-gif.gif" alt="">			
                </h1>	
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/about"> Profil Kami</a></p>
            </div>	
        </div>
    </div>
</section>
<br>
<br>	
				    			

@endsection