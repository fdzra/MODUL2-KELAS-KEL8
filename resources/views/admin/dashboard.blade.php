<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super Admin Dashboard</title>

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
                <a class="nav-link text-dark" href="/admin/admin/kelolaKasir">
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
                    <h1 class="h3 text-primary mt-4 mb-0"><b>Dashboard Super Admin</b></h1>
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

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-2">
                                                Perangkat Aktif</div>
                                            <div class="h2 mb-0 font-weight-bold text-success"><i class="fas fa-signal"></i> 135</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-2">
                                                Perangkat Non Aktif</div>
                                            <div class="h2 mb-0 font-weight-bold text-danger"><i class="fas fa-signal"></i> 15</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-2">
                                                Omset</div>
                                            <div class="h4 mb-0 font-weight-bold text-success"> Rp. 350.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-1">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-2">
                                                Tunggakan</div>
                                            <div class="h4 mb-0 font-weight-bold text-danger"> Rp. 52.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-grey">Lokasi Perangkat</h6>
                                    <button class="btn btn-info btn-sm ml-auto mr-2">Semua</button>
                                    <button class="btn btn-ouline-info btn-sm mr-2">Aktif</button>
                                    <button class="btn btn-ouline-info btn-sm mr-2">Non-Aktif</button>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('images/map.png') }}" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header text-white py-3 d-flex flex-row align-items-center justify-content-between border-0" style="background-color: rgb(22, 22, 78)">
                                    <h6 class="m-0 font-weight-bold text-grey">Lokasi Perangkat</h6>
                                    <button class="btn btn-info btn-sm ml-auto mr-2">Bulanan</button>
                                    <button class="btn btn-ouline-info btn-sm mr-2">Tahunan</button>
                                </div>
                                <div class="card-body" style="background-color: rgb(22, 22, 78)">
                                    <div class="chart-area ">
                                        <canvas id="PenggunaanAirChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-7">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <p class="m-0 text-grey">TABEL</p>
                                    <h5 class="m-0 font-weight-bold text-dark">Penggunaan Air</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>BULAN</th>
                                                <th>TAHUN</th>
                                                <th>PENGGUNAAN AIR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Januari</td>
                                                <td>2022</td>
                                                <td>13520.3<sup>M3</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Februari</td>
                                                <td>2022</td>
                                                <td>13520.3<sup>M3</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Maret</td>
                                                <td>2022</td>
                                                <td>13520.3<sup>M3</sup></td>
                                            </tr>
                                            <tr>
                                                <td>April</td>
                                                <td>2022</td>
                                                <td>13520.3<sup>M3</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Mei</td>
                                                <td>2022</td>
                                                <td>13520.3<sup>M3</sup></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-right">
                                        <a class="btn btn-sm btn-outline-info" style="border: 1px solid; border-radius: 50%; padding: 0px; width :1.5rem"><</a>
                                                <a class="btn btn-sm btn-outline-info" style="border: 1px solid; border-radius: 50%; padding: 2px; width :1.5rem">1</a>
                                                <a class="btn btn-sm btn-info" style="border: 1px solid; border-radius: 50%; padding: 2px; width :1.5rem;">2</a>
                                                <a class="btn btn-sm btn-outline-info" style="border: 1px solid; border-radius: 50%; padding: 2px; width :1.5rem;">3</a>
                                                <a class="btn btn-sm btn-outline-info" style="border: 1px solid; border-radius: 50%; padding: 0px; width :1.5rem">></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('PenggunaanAirChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Penggunaan Air',
                    data: [0, 5, 8, 22, 28, 34],
                    borderColor: 'rgb(211, 180, 252)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // menghilangkan legenda
                    }
                },
                scales: {
                    y: {
                        suggestedMin: 0,
                        suggestedMax: 60,
                        ticks: {
                            color: 'white',
                            stepSize: 10,
                            callback: function(value, index, values) {
                                return value + 'm3';
                            }
                        }
                    },
                    x: {
                        ticks: {
                            color: 'white', // warna teks
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>
