@extends('layout.frontend')
@section('title','PPDB SMK YPF Bandung')
@section('content')

<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    PPDB SMK YPF BANDUNG				
                </h1>	
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/register"> PPDB</a></p>
            </div>	
        </div>
    </div>
</section>
   	<!-- Start search-course Area -->
       <section class="search-course-area relative" style="background:unset;">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-md-6 search-course-left">
                    <h1>
                       Selamat Datang Di PPDB Online <br>
                        SMK YPF Bandung
                    </h1>
                    <p>
                        Dengan mengikuti perkembangan industry 4.0, kami menjamin siswa/siswi sekolah kami, mampu 
                        menjadi seorang yang kompetent di dunia kerja. 
                    </p>
                </div>
                <div class="col-lg-49 col-md-6 search-course-right section-gap">
                    
                    {!! Form::open(['url' => 'postregister','class' => 'form-wrap']) !!}
                        <h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>	
                        {!!Form::text('nama_depan','',['class'=>'form-control','placeholder'=>'Nama Depan']) !!}	
                        {!!Form::text('nama_belakang','',['class'=>'form-control','placeholder'=>'Nama Belakang']) !!}
                        <div class="form-select" id="service-select">
                            {!! Form::select('jenis_kelamin',['' => 'Pilih Jenis Kelamin','L' => 'Laki Laki', 'P' => 'Perempuan'],'P') !!}
                        </div>
                        <div class="form-select" id="service-select">	
                            {!! Form::select('agama',['' => 'Pilih Agama','Islam' => 'Islam', 'Katolik' => 'Katolik', 'Protestan' => 'Protestan', 'Budha' => 'Budha', 'Hindu' => 'Hindu'],['style' =>'display: none']) !!}	
                        </div>									
                        {!!Form::textarea('alamat','',['class'=>'form-control','placeholder'=>'Alamat']) !!}
                        {!!Form::text('tempat_lahir','',['class'=>'form-control','placeholder'=>'Tempat Lahir']) !!}	
                        {!!Form::date('tanggal_lahir','',['class'=>'form-control','placeholder'=>'Tanggal Lahir']) !!}
                        {!!Form::text('nama_ayah','',['class'=>'form-control','placeholder'=>'Nama Ayah']) !!}
                        {!!Form::text('nama_ibu','',['class'=>'form-control','placeholder'=>'Nama Ibu']) !!}
                        {!!Form::text('nisn','',['class'=>'form-control','placeholder'=>'NISN']) !!}
                        {!!Form::text('tlp','',['class'=>'form-control','placeholder'=>'Nomor Telepon']) !!}
                        <div class="form-select" id="service-select">
                            {!! Form::select('jurusan',['' => 'Pilih Jurusan','Analis Kimia' => 'Analis Kimia', 'Farmasi Industri' => 'Farmasi Industri', 'Farmasi Klinis dan Komunitas' => 'Farmasi Klinis dan Komunitas'],['style' =>'display: none']) !!}
                        </div>
                        {!!Form::email('email','',['class'=>'form-control','placeholder'=>'Email']) !!}
                        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                        
                        <input class="primary-btn text-uppercase" type="submit" value="Kirim" style="text-align: center">
                    {!! Form::close() !!}
                </div>
            </div>
        </div>	
    </section>
    <!-- End search-course Area -->
@endsection