@extends('layout.main')

@section('header')
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection

@section('title', 'Data Siswa')

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
      <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning">Edit</a>
    </div>
  </div>
  <div class="card">
    <div class="container">
      {{-- @if(session('sukses'))
      <div class="alert alert-success" role="alert">
         {{session('sukses')}}
        </div>
        @endif
        @if(session('gagal'))
        <div class="alert alert-danger" role="alert">
           {{session('gagal')}}
          </div>
          @endif --}}
      <div class="row">
          <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah Nilai
            </button>
              <h5 class="mt-3">{{ $siswa->mapel->count() }} Mata Pelajaran</h5>
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
        @foreach($siswa->mapel as $mapel)
          <tr>

              <td>{{ $mapel->kode }}</td>
              <td>{{ $mapel->nama }}</td>
              <td>{{ $mapel->semester }}</td>
              <td>
                  <a href="#" class="nilai" data-type="text" data-pk="{{ $mapel->id }}" 
                  data-url="/api/siswa/{{ $siswa->id }}/editnilai" data-title="Masukkan Nilai">{{ $mapel->pivot->nilai }}
                </a>
              </td>
              <td><a href="/guru/{{ $mapel->guru_id }}/profile">{{ $mapel->guru->nama }}</a></td>
              <td><a href="/siswa/{{ $siswa->id }}/{{ $mapel->id }}/deletenilai" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Data Ingin Dihapus ?')">Hapus</a></td>
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
       <span>Rata Rata Nilai</span> {{ $siswa->rataRataNilai() }}
    </div>

    
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/siswa/{{ $siswa->id }}/addnilai" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <select class="form-control" id="mapel" name="mapel">
              @foreach($matapelajaran as $mp)
              <option value="{{ $mp->id }}">{{ $mp->nama }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group{{ $errors->has('nilai') ? ' has-error' : '' }}">
           <label for="exampleInputEmail1">Nilai</label>
           <input type="nilai" name="nilai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai" value="{{ old('nilai') }}">
           @if($errors->has('nilai'))
             <div class="alert alert-danger" role="alert">
               <span class="help-block">{{ $errors->first('nilai') }}</span>
             </div>
             @endif
         </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

  @section('footer')
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('chartNilai', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Data Nilai Siswa'
      },
      xAxis: {
          categories: {!! json_encode($categories) !!},
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Nilai'
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Nilai',
          data: {!! json_encode($data) !!}
      }]
  });

  //Jquery Edit Nilai
$(document).ready(function() {
    $('.nilai').editable({
      mode:'inline',
    });
});
  </script>
  @endsection

    {{-- <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/admin/js/sb-admin-2.min.js"></script> --}}

  

          
