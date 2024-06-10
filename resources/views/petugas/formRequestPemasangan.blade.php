<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Request Pemasangan</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/d37debc9e5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4 p-3" href="/">
                <img src="{{ asset('images/logo.png') }}" width="100%" alt="Logo">
            </a>
            <br>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link btn-info " href="/admin/petugas">
                    <i class="fas fa-tv text-dark"></i>
                    <span class="text-dark">Request Pemasangan</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/admin/petugas/kelolaPerangkat">
                    <i class="fas fa-users text-dark"></i>
                    <span class="text-dark">Kelola Perangkat</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/admin/petugas/laporanPengaduan">
                    <i class="fas fa-file-alt text-dark"></i>
                    <span class="text-dark">Laporan Pengaduan</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i class="fas fa-sign-out-alt text-dark"></i>
                    <span class="text-dark">Logout</span></a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-light topbar pt-3 ml-3 mb-4 static-top">
                    <h1 class="h3 text-primary mt-4 mb-0"><b>Request Pemasangan</b></h1>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mr-2 d-none d-lg-inline text-dark mt-3"><b>{{ Auth::user()->name }}</b></h5>
                                <i class='far fa-user-circle' style='font-size:24px'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<a href='/logout'>Logout>></a>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="nav-link card shadow py-2 px-3 bg-success" style="height: 50px;">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <span class="text-sm font-weight-bold text-uppercase mb-2 text-dark">Lokasi Pemasangan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="nav-link card shadow py-2 px-3 bg-success" style="height: 50px;">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <span class="text-sm font-weight-bold text-uppercase mb-2 text-dark">Form Pemasangan</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="nav-link card shadow py-2 px-3"style="height: 50px;">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <span class="text-sm font-weight-bold text-uppercase mb-2 text-dark">Form Integrasi</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mb-4">
                            <div class="nav-link card shadow py-2 px-3" style="height: 50px;">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <span class="text-sm font-weight-bold text-uppercase mb-2 text-dark">Konfirmasi Pemasangan</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <p class="m-0 font-weight-bold text-dark">FORMULIR PEMASANGAN</p>
                                    <h5 class="m-0 text-grey"></h5>
                                </div>
                                <div style="height: 25px;"></div>
                                <div class="mb-3">
                                    <div class="col-lg-12">
                                        <div style="margin-left: 20px;">
                                            <label for="exampleInputEmail1" class="form-label">INFORMASI DEVICE</label>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 10px;"></div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div style="margin-left: 20px; margin-right: 20px;">
                                            <label for="exampleInputEmail1" class="form-label">Nama Device</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="device=bima12-30-Ujung Berung-13" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 25px;"></div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <div style="margin-left: 20px; margin-right: 20px;">
                                            <label for="exampleInputEmail1" class="form-label">FOTO PEMASANGAN</label>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 20px;">
                                    <div style="margin-left: 20px;">
                                        <section tabindex="-1" data-unify="Card" class="">
                                            <input type="file" id="profilePictureInput" name="profilePicture" accept="image/jpeg, .jpeg, .jpg, image/png, .png" data-testid="input-change-picture">
                                        </section>
                                    </div>
                                    <div style="height: 30px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-11 col-md-14 mb-14 d-flex justify-content-start align-items-center" style="margin-left: 30px;">
                        <a class="btn btn-sm btn-success" href="/admin/petugas/formRequestLokasi">Back</a>
                        <div class="col-xl-11 col-md-14 mb-14 d-flex justify-content-end align-items-center" style="margin-left: 70px;">
                            <a class="btn btn-sm btn-success" href="/admin/petugas/formRequestIntegrasi">Submit Formulir Pemasangan</a>
                        </div>
                    </div>
                </div>
                <div style="height: 50px;"></div>
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('bootstrap_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('bootstrap_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('bootstrap_admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
