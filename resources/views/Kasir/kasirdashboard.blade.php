@extends('KasirLayouts.kasir')

@section('content')
    <!-- Section: Sales Performance KPIs -->
    <div style="display: flex;">
        <!-- Card 1 -->
        <div class="col-md-6">
            <section class="mb-4">
                <div class="card">
                    <div class="card-header text-center py-3">
                        <h5 class="mb-0 text-center">
                            <strong>Data Pelanggan</strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable1" class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Buat Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                        <tr>
                                            <th scope="row">{{ $u->name }}</th>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>
                                                <a href="/admin/kasir/pembayaran" class="btn btn-primary">Buat Transaksi</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
            <section class="mb-4">
                <div class="card">
                    <div class="card-header text-center py-3">
                        <h5 class="mb-0 text-center">
                            <strong>Data History Transaksi</strong>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable2" class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Nomor Transaksi</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Nomor Handphone</th>
                                        <th scope="col">Nama Perangkat</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Penggunaan Debit Air</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Detail Pembayaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaksi as $t)
                                        <tr>
                                            <th scope="row">{{ $t->id_transaksi }}</th>
                                            <td>{{ $t->nama_pelanggan }}</td>
                                            <td>{{ $t->no_handphone }}</td>
                                            <td>{{ $t->nama_perangkat }}</td>
                                            <td>{{ $t->alamat }}</td>
                                            <td>{{ $t->keterangan }}</td>
                                            <td>{{ $t->penggunaan_debit_air }}</td>
                                            <td>{{ $t->total }}</td>
                                            <td><a href="{{ url('detail-transaksi/'.$t->id_transaksi)}}" class="btn btn-primary">Detail Transaksi</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- End of Section: Sales Performance KPIs -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable();
            $('#datatable2').DataTable();
        });
    </script>
@endsection
