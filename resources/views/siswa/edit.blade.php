@extends('layout.main')

@section('title', 'Edit Data Siswa')

@section('content1')

<h1>Edit Data Siswa</h1>
          @if(session('sukses'))
        <div class="alert alert-success" role="alert">
           {{session('sukses')}}
          </div>
          @endif
          <div class="row">
              <div class="col-lg mx-auto">
                <form action="/siswa/{{$siswa->id }}/update" method="POST" enctype="multipart/form-data">
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
                       <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{ $siswa->nama_depan }}">
                       @if($errors->has('nama_depan'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('nama_depan') }}</span>
                        </div>
                        @endif
                     </div>
                     <div class="form-group{{ $errors->has('nama_belakang') ? ' has-error' : '' }}">
                         <label for="exampleInputEmail1">Nama Belakang</label>
                         <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{ $siswa->nama_belakang }}">
                         @if($errors->has('nama_belakang'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('nama_belakang') }}</span>
                        </div>
                        @endif
                     </div>
                     <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                         <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                         <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                           <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki Laki</option>
                           <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                         </select>
                         @if($errors->has('jenis_kelamin'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>
                        @endif
                       </div>
                       <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                         <label for="exampleFormControlSelect1">Agama</label>
                         <select class="form-control" id="exampleFormControlSelect1"name="agama"> 
                           <option value="Islam" @if($siswa->agama == 'Islam') selected @endif>Islam</option>
                           <option value="Katolik" @if($siswa->agama == 'Katolik') selected @endif>Katolik</option>
                           <option value="Protestan" @if($siswa->agama == 'Protestan') selected @endif>Protestan</option>
                           <option value="Budha" @if($siswa->agama == 'Budha') selected @endif>Buddha</option>
                           <option value="Hindu" @if($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                         </select>
                         @if($errors->has('agama'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('agama') }}</span>
                        </div>
                        @endif
                       </div>
                       <div class="form-group">
                         <label for="exampleFormControlTextarea1">Alamat</label>
                         <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" >{{ $siswa->alamat }}</textarea>
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Tempat Lahir</label>
                         <input type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Lahir" value="{{ $siswa->tempat_lahir}}">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Tanggal Lahir</label>
                         <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->tanggal_lahir }}">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Nama Ayah</label>
                         <input type="text" name="nama_ayah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->nama_ayah }}">
                       </div>
                       <div class="form-group">
                         <label for="exampleInputEmail1">Nama Ibu</label>
                         <input type="text" name="nama_ibu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->nama_ibu }}">
                       </div>
                       <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                         <label for="exampleInputEmail1">NISN</label>
                         <input type="text" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->nisn }}">
                         @if($errors->has('nisn'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('nisn') }}</span>
                        </div>
                        @endif
                       </div>
                       <div class="form-group{{ $errors->has('tlp') ? ' has-error' : '' }}">
                         <label for="exampleInputEmail1">No Telepon</label>
                         <input type="text" name="tlp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $siswa->tlp }}">
                         @if($errors->has('tlp'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block">{{ $errors->first('tlp') }}</span>
                        </div>
                        @endif
                       </div>
                       <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
                         <label for="exampleFormControlSelect1">Jurusan</label>
                         <select class="form-control" id="exampleFormControlSelect1" name="jurusan" value="{{ $siswa->jurusan }}">
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
                       <div class="form-group">
                        <label for="exampleFormControlTextarea1">Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                      </div>
                         <button type="submit" class="btn btn-primary">Update</button>
                   </form>
              </div>
          </div>
@endsection


 

          
