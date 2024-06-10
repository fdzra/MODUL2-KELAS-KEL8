<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buat Kasir</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('all.min.css') }}" rel="stylesheet" type="text/css">
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
            <br>=
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-tv text-dark"></i>
                    <span class="text-dark">Dashboard Super Admin</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/admin/admin/kelolaPelanggan">
                    <i class="fas fa-users text-dark"></i>
                    <span class="text-dark">Kelola Pelanggan</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/admin/admin/kelolaPetugas">
                    <i class="fas fa-code text-dark"></i>
                    <span class="text-dark">Kelola Petugas</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-dollar-sign text-dark"></i>
                    <span class="text-dark">Kelola Kasir</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/logout">
                    <i class="fas fa-dollar-sign text-dark"></i>
                    <span class="text-dark">Logout</span></a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-light topbar pt-3 ml-3 mb-4 static-top">
                    <h1 class="h3 text-primary mt-4 mb-0"><b>Edit Data Kasir</b></h1>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
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
                            <a class="nav-link dropdown-toggle" href="/profile" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <h5 class="mr-2 d-none d-lg-inline text-dark mt-3"><b>Fadhilah Azzahra</b></h5>
                                <img class="img-profile rounded-circle" src="{{ asset('images/profil.jpeg') }}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-2 font-weight-bold">Buat Kasir Baru</h6>
                                </div> 
                                <div class="card-body">
                                    <form action="/admin/admin/updateKelolaKasir/{{$data->kasir_id}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputname">Nama</label>
                                                <input type="name" class="form-control" name="kasir_name" id="inputname" placeholder="Masukkan nama kasir baru" value="{{$data->kasir_name}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" name="kasir_email" id="inputEmail4" placeholder="Masukkan email kasir" value="{{$data->kasir_email}}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputUsername">Username</label>
                                                <input type="text" class="form-control" name="kasir_username" id="inputUsername" placeholder="Masukkan username kasir" value="{{$data->kasir_username}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword">Password</label>
                                                <input type="text" class="form-control" name="kasir_password" id="inputPassword" placeholder="Masukkan password kasir" value="{{$data->kasir_password}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputHandphone">Nomor Handphone</label>
                                                <input type="text" class="form-control" name="kasir_phone" id="inputHandphone" placeholder="Masukkan nomor handphone kasir" value="{{$data->kasir_phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAlamat">Alamat</label>
                                            <textarea class="form-control" name="kasir_alamat" id="inputAlamat" placeholder="Masukkan alamat lengkap kasir" rows="3">{{$data->kasir_alamat}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                