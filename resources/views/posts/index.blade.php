@extends('layout.main')

@section('title', 'DATA SISWA')

@section('content')

          <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Posts</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="input-group">
                      <a href="{{ route('posts.add') }}" class="btn btn-sm btn-primary ">Tambah Postingan</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">User</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>            
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>
                              <a target="_blank" href="{{ route('site.single.post',$post->slug) }}" class="btn btn-warning btn-sm" >View</a>
                              <a href="#" class="btn btn-info btn-sm">Edit</a>
                              <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
          
                    </tbody>
                  </table>
                </div>
              </div>
                </div>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  </table>
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


