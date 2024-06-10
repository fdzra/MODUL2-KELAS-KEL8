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
            <!-- Masukkan kode HTML untuk status count di sini -->
        </div>

        <!-- Tabel Request Pemasangan -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Request Pemasangan Device</h4>
                        <div class="card-header-action">
                            <a href="{{ url('/request-pemasangan/create') }}" class="btn btn-success">Request Pemasangan <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="requestPemasanganTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat Lengkap</th>
                                    <th>Nomor Telepon</th>
                                    <th>Status</th>
                                    <th>Terakhir DiUpdate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($requestPemasangan as $request)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $request->nama }}</td>
                                <td>{{ $request->alamat_lengkap }}</td>
                                <td>{{ $request->nomor_telepon }}</td>
                                <td>{{ $request->created_at }}</td>
                                <td>{{ $request->updated_at }}</td>
                                <td>
                                    <a href="{{ route('request-pemasangan.show', $request->id) }}" class="btn btn-primary btn-sm">Tampilkan Detail</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('template.foot')

</body>

</html>
