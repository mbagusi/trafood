<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Saran</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('') }}/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Custom styles for this template-->
    <link href="{{ url('') }}/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #28251f">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

             <!-- Heading -->
             <div class="sidebar-heading">
                Register
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('addadmin.create') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Register Admin</span></a>
            </li>
             <!-- Divider -->
        <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                Form
            </div>

            
            <!-- Nav Item - Form -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('form-food-banten') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Food Banten</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('form-food-jabar') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Food Jawa Barat</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('form-food-jateng') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Food Jawa Tengah</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('form-food-jatim') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Food Jawa Timur</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.indexRekomendasi') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Food Rekomendasi</span></a>
            </li>

             <!-- Divider -->
        <hr class="sidebar-divider">


            <!-- Heading -->
            <div class="sidebar-heading">
                Saran
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('form-saran') }}">
                    <i class="bi bi-menu-down"></i>
                    <span>Kritik & Saran</span></a>
            </li>
            


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <a href="{{ route('login.logout') }}" style="color: white" style="float: right;">
                        <button type="submit" class="btn text-light ml-3" style="float: right; background-color: #28251f"><i class="bi bi-power"></i>Logout</button></a>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin/<b>Kritik & Saran</b></h1>
                    </div>

                    <h5>Data Kritik & Saran</h5>
                    @if (session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif
                    
                    <table class="table table-hover text-light" style="background-color: #28251f" style="table-layout: fixed">
                        <thead>
                          <tr>
                            <th style="text-align: center;" scope="col">ID</th>
                            <th style="text-align: center;" scope="col">Nama</th>
                            <th style="text-align: center" scope="col">Email</th>
                            <th style="text-align: center" scope="col" width="30px">Deskripsi</th>
                            <th style="text-align: center" scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($sarans as $saran)
                          <tr>
                            <td align="center">{{$saran->id}}</td>
                            <td align="center">{{$saran->nama}}</td>
                            <td align="center">{{$saran->email}}</td>
                            <td align="center">{{$saran->deskripsi}}</td>
                            <td align="center"> <form action="{{ route('admin.destroySaran',['id'=>$saran->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                </form>
                            </td>
                          </tr>
                          @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                        </tbody>
                      </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Trafood.id 2022</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('') }}/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('') }}/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ url('') }}/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('') }}/assets/js/demo/chart-area-demo.js"></script>
    <script src="{{ url('') }}/assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>