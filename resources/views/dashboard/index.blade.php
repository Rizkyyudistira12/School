<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset ('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('admin/assets/logo.png') }}" width="200px" height="70px"  alt="">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider mt-3">

      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
     
      <li class="nav-item active">
        <a class="nav-link pb-0" href="/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      @if(auth()->user()->role == 'admin')

      <li class="nav-item">
        <a class="nav-link pb-0" href="/profile">
          <i class="fas fa-fw fa-user"></i>
          <span>My Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pb-0" href="/siswa">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Siswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pb-0" href="/posts">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Posts</span></a>
      </li>
      @endif
  
 
      <li class="nav-item">
        <a class="nav-link pb-0" href="/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider mt-3">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

              
          

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                
                 <img class="img-profile rounded-circle" src="
                 @if (auth()->user()->role == 'siswa')
                 {{ auth()->user()->siswa->getAvatar() }}
                 @else
                 /images/default.jpg
                 @endif
                 ">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/profilsaya">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
            <div class="col-md-6">
                <h5 class="mt-3">Ranking 5 Besar</h5>
                  <table class="table">
                      <thead class="thead-dark">
                          <tr>
                              <th scope="col">Ranking</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jurusan</th>
                              <th scope="col">Nilai</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $ranking = 1;
                        @endphp
                        @foreach (ranking5Besar() as $s)
                          <tr>
                              <td>{{ $ranking }}</td>
                              <td>{{ $s->nama_lengkap() }}</td>
                              <td>{{ $s->jurusan }}</td>
                              <td>{{ $s->rataRataNilai }}</td>
                          </tr>
                          @php
                          $ranking++;
                        @endphp
                          @endforeach
                      </tbody>
                  </table>
            </div>   
            
            <div class="col-md-3">
              <div class="metric">
                <span class="icon"><img src="{{ asset('admin/assets/student.png') }}" width="100px" height="100px" alt=""></span>
                <p>
                  <span class="number">{{ totalSiswa() }}</span>
                  <span class="title">Total Siswa</span>
                </p>
              </div>
            </div>

            <div class="col-md-3">
              <div class="metric">
                <span class="icon"><img src="{{ asset('admin/assets/teacher.png') }}" width="100px" height="100px" alt=""></span>
                <p>
                  <span class="number">{{ totalGuru() }}</span>
                  <span class="title">Total Guru</span>
                </p>
              </div>
            </div>
    </div>

    
          <!-- Content Row -->

      

          <!-- Content Row -->
   

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; SMK YPF 2020 All Right Reserved</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div  class="modal-body">Jika Ingin Keluar dari Sistem silahkan klik tombol Keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="/logout">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('admin/') }}js/sb-admin-2.min.js"></script>
</body>

</html>
