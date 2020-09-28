@extends('layout.main')

@section('title', 'Data Siswa')

@section('content1')

<h1>Profile Siswa</h1>

  <div class="card" style="width: 18rem;">
    <img src="{{ $user->getAvatar()}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $user->name }}</h5>
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
      </div>
    <a href="/siswa/{{ $user->id }}/edit" class="btn btn-warning">Update</a>
  </div>
@endsection
  {{-- <!-- Bootstrap core JavaScript-->
  <script src="/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Custom scripts for all pages-->
  <script src="/admin/js/sb-admin-2.min.js"></script> --}}

          
