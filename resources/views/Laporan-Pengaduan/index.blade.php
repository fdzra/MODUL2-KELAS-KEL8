<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Laporan Pengaduan</h1>
        </div>

        <!-- Status Count -->
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Belum Diproses</div>
                                        <div class="h5 mb-0 mt-3 font-weight-bold text-gray-800">{{ $belumDiprosesCount }} Pengaduan</div>
                                </div>
                            <div class="col-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sedang Diproses -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Sedang Diproses</div>
                                <div class="h5 mb-0 mt-3 font-weight-bold text-gray-800">{{ $sedangDiprosesCount }} Pengaduan</div>
                            </div>
                            <div class="col-auto">                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sudah Selesai -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sudah Selesai
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mt-3 mr-3 font-weight-bold text-gray-800">{{ $sudahSelesaiCount }} Pengaduan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Laporan Pengaduan -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Laporan Pengaduan</h4>
                        <div class="card-header-action">
                            <a href="{{ url('/laporan-pengaduan/create') }}" class="btn btn-success">Tambah Pengaduan <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Waktu Pengaduan</th>
                                    <th>Terakhir Diupdate</th>
                                    <th>Bukti Pengaduan</th>
                                    <th>Status Pengaduan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($belumDiproses as $lp)
                                <tr>
                                    <td class="center mt-2">{{ $no++ }}</td>
                                    <td class="center mt-2">{{ $lp->kategori }}</td>
                                    <td class="center mt-2">{{ $lp->deskripsi }}</td>
                                    <td class="center mt-2">{{ $lp->waktu_pengaduan }}</td>
                                    <td class="center mt-2">{{ $lp->terakhir_diupdate }}</td>
                                    <td class="center mt-2"><img src="{{ asset('/storage/posts/'.$lp->bukti_pengaduan) }}" class="rounded" style="width: 150px"></td>
                                    <td class="center mt-2">{{ $lp->status_pengaduan }}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="{{ route('laporan-pengaduan.show', $lp->id) }}" class="btn btn-primary btn-lg btn-block">Tampilkan Detail</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- Tambahkan baris lainnya sesuai kebutuhan --> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @include('template.foot')
</body>

</html>
