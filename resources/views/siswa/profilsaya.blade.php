@extends('layout.main')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

@section('title', 'Profile Siswa')

@section('content1')


<h1>Profile Siswa</h1>

<div class="card-group">
  <div class="card">
    <img src="{{ $siswa->getAvatar()}}" width="350px" height="400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}</h5>
        <div class="profile-detail">
          <h4 class="heading">Info Siswa</h4>
            <ul class="list-unstyled list-justify">
                <li>Jenis Kelamin : <span>{{ $siswa->jenis_kelamin }}</span></li>
                <li>Agama : <span>{{ $siswa->agama }}</span></li>
                <li>Alamat : <span>{{ $siswa->alamat }}</span></li>
                <li>Tempat Lahir : <span>{{ $siswa->tempat_lahir }}</span></li>
                <li>Tanggal Lahir : <span>{{ $siswa->tanggal_lahir }}</span></li>
                <li>NISN : <span>{{ $siswa->nisn }}</span></li>
                <li>Nama Ayah : <span>{{ $siswa->nama_ayah }}</span></li>
                <li>Nama Ibu : <span>{{ $siswa->nama_ibu}}</span></li>
                <li>No Telepon : <span>{{ $siswa->tlp }}</span></li>
                <li>Jurusan : <span>{{ $siswa->jurusan }}</span></li>
            </ul>
        </div>
      <a href="/profilsaya/{{ $siswa->id }}/edit" class="btn btn-warning">Edit</a>
    </div>
  </div>
  <div class="card">
    <div class="container">
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
         {{session('sukses')}}
        </div>
        @endif
        @if(session('gagal'))
        <div class="alert alert-danger" role="alert">
           {{session('gagal')}}
          </div>
          @endif
      <div class="row">
          <div class="col-md-12">
              <h5 class="mt-3">{{ auth()->user()->siswa->mapel->count() }} Mata Pelajaran</h5>
  <table class="table">
      <thead class="thead-dark">
          <tr>
              <th scope="col">KODE</th>
              <th scope="col">NAMA</th>
              <th scope="col">SEMESTER</th>
              <th scope="col">NILAI</th>
              <th scope="col">GURU</th>
              <th scope="col">AKSI</th>
          </tr>
      </thead>
      <tbody>
        @foreach(auth()->user()->siswa->mapel as $mapel)
          <tr>

              <td>{{ $mapel->kode }}</td>
              <td>{{ $mapel->nama }}</td>
              <td>{{ $mapel->semester }}</td>
              <td>
                  <a href="#" class="nilai" data-type="text" data-pk="{{ $mapel->id }}" 
                  data-url="/apiauth()->user()->siswa/{{ auth()->user()->siswa->id }}/editnilai" data-title="Masukkan Nilai">{{ $mapel->pivot->nilai }}
                </a>
              </td>
              <td><a href="/guru/{{ $mapel->guru_id }}/profile">{{ $mapel->guru->nama }}</a></td>
              <td><a href="auth()->user()->siswa/{{ auth()->user()->siswa->id }}/{{ $mapel->id }}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Ingin Dihapus ?')">Hapus</a></td>
          </tr>
        @endforeach
      </tbody>
  </table>
          </div>          
  </div>
    </div>
    <div class="panel">
      <div id="chartNilai"></div>
    </div>
    <div class="col-md-4 stat-item">
       <span>Rata Rata Nilai</span> {{ auth()->user()->siswa->rataRataNilai() }}
    </div>

    
  </div>

</div>



@endsection

  @section('footer')
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    
  </script>
  @endsection

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/admin/js/sb-admin-2.min.js"></script> --}}

  

          
