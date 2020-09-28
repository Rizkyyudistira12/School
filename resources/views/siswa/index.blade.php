@extends('layout.main')

@section('title', 'DATA SISWA')

@section('content')
{{-- <link href="../admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

          {{-- @if(session('sukses'))
        <div class="alert alert-success" role="alert">
           {{session('sukses')}}
          </div>
          @endif --}}
          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Siswa SMK YPF</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                          <label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select> entries
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div> &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
                          Tambah Data Siswa
                      </button> &nbsp; &nbsp; &nbsp; &nbsp;
                      <a href="/siswa/exportexcel" class="btn btn-primary btn-sm">Export Excel</a> &nbsp; &nbsp; &nbsp; &nbsp;
                      <a href="/siswa/exportpdf" class="btn btn-primary btn-sm">Export PDF</a>
                      
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Rata Rata Nilai</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Nama Ayah</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">Nisn</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>            
                        @foreach($data_siswa as $siswa)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><a href="/siswa/{{ $siswa->id }}/profile">{{$siswa->nama_depan}}</a></td>
                            <td><a href="/siswa/{{ $siswa->id }}/profile">{{$siswa->nama_belakang}}</a></td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td>{{$siswa->rataRataNilai()}}</td>
                            <td>{{$siswa->tempat_lahir}}</td>
                            <td>{{$siswa->tanggal_lahir}}</td>
                            <td>{{$siswa->nama_ayah}}</td>
                            <td>{{$siswa->nama_ibu}}</td>
                            <td>{{$siswa->nisn}}</td>
                            <td>{{$siswa->tlp}}</td>
                            <td>{{$siswa->jurusan}}</td>
                            <td>
                              <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm delete" siswa-id="{{ $siswa->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
          
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                      <ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous">
                        <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                        <li class="paginate_button page-item next" id="dataTable_next">
                          <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  </table>
                </div>
              </div>
            </div>
          
          </div>
      

               <!-- Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{ old('email') }}">
                            @if($errors->has('email'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('email') }}</span>
                              </div>
                              @endif
                          </div>
                            <div class="form-group{{ $errors->has('nama_depan') ? ' has-error' : '' }}">
                              <label for="exampleInputEmail1">Nama Depan</label>
                              <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ old('nama_depan') }}">
                              @if($errors->has('nama_depan'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('nama_depan') }}</span>
                              </div>
                              @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{ old('nama_belakang') }}">
                            </div>
                            <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                  <option value="L" {{(old('jenis_kelamin') == 'L') ? 'selected' : ''  }}>Laki Laki</option>
                                  <option value="P" {{(old('jenis_kelamin') == 'P') ? 'selected' : ''  }}>Perempuan</option>
                                </select>
                                @if($errors->has('jenis_kelamin'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
                              </div>
                              @endif
                              </div>
                              <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                                <label for="exampleFormControlSelect1">Agama</label>
                                <select class="form-control" id="exampleFormControlSelect1"name="agama" value="{{ old('agama') }}">
                                  <option value="Islam">Islam</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Protestan">Protestan</option>
                                  <option value="Budha">Buddha</option>
                                  <option value="Hindu">Hindu</option>
                                </select>
                                @if($errors->has('agama'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('agama') }}</span>
                              </div>
                              @endif
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" {{ old('alamat') }}></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ old('nama_ayah') }}">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ old('nama_ibu') }}">
                              </div>
                              <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">NISN</label>
                                <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('nisn') }}">
                                @if($errors->has('nisn'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('nisn') }}</span>
                              </div>
                              @endif
                              </div>
                              <div class="form-group{{ $errors->has('tlp') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">No Telepon</label>
                                <input type="text" name="tlp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('tlp') }}">
                                @if($errors->has('tlp'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('tlp') }}</span>
                              </div>
                              @endif
                              </div>
                              <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
                                <label for="exampleFormControlSelect1">Jurusan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jurusan" value="{{ old('jurusan') }}">
                                  <option value="Analis Kimia">Analis Kimia</option>
                                  <option value="Farmasi Industri">Farmasi Industri</option>
                                  <option value="Farmasi Klinis dan Komunitas">Farmasi Klinis dan Komunitas</option>
                                </select>
                                @if($errors->has('jurusan'))
                              <div class="alert alert-danger" role="alert">
                                <span class="help-block">{{ $errors->first('jurusan') }}</span>
                              </div>
                              @endif
                              </div>
                              <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                                <label for="exampleFormControlTextarea1">Avatar</label>
                                <input type="file" name="avatar" class="form-control">
                                @if($errors->has('avatar'))
                                <div class="alert alert-danger" role="alert">
                                  <span class="help-block">{{ $errors->first('avatar') }}</span>
                                </div>
                                @endif
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                          </form>
                    </div>
                </div>
                </div>
            </div>
            @endsection

            @section('footer')
            <script>
              $('.delete').click(function(){
                var siswa_id = $(this).attr('siswa-id');
                swal({
                  title: "Yakin ?",
                  text: "Ingin menghapus data siswa dengan id "+ siswa_id + " ?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  console.log(willDelete);
                  if (willDelete) {
                    window.location = "/siswa/"+siswa_id+"/delete";
                  } 
                });
              });
            </script>
            @endsection


