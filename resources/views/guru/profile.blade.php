@extends('layout.main')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('title', 'Data Siswa')

@section('content1')


<h1>Profile Siswa</h1>

<div class="card-group">
  <div class="card">
    <img src="" width="350px" height="400px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $guru->nama}}</h5>
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
          <div class="col-12">
              <h5 class="mt-3">Mata Pelajaran yang diaja oleh Guru {{ $guru->nama }}</h5>
  <table class="table">
      <thead class="thead-dark">
          <tr>
              <th scope="col">KODE</th>
              <th scope="col">NAMA</th>
              <th scope="col">SEMESTER</th>
          </tr>
      </thead>
      <tbody>
          @foreach($guru->mapel as $mapel)
          <tr>
              <td>{{ $mapel->kode }}</td>
              <td>{{ $mapel->nama }}</td>
              <td>{{ $mapel->semester }}</td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </tbody>
      @endforeach
  </table>
          </div>          
  </div>
    </div>
    <div class="panel">
      <div id="chartNilai"></div>
    </div>
  </div>

</div>



@endsection

  @section('footer')

  @endsection

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/admin/js/sb-admin-2.min.js"></script> --}}

  

          
