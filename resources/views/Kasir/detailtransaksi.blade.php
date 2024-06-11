@extends('KasirLayouts.kasir')

@section('content')

<div class="container-fluid mt-5">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body text-center" >
                    <h6 class="mb-0">
                        Detail Transaksi
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Nama Pelanggan</label>
                                <h6>{{ $transaksi->nama_pelanggan }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>No Handphone</label>
                                <h6>{{ $transaksi->no_handphone }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Nama Perangkat</label>
                                <h6>{{ $transaksi->nama_perangkat }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Alamat</label>
                                <h6>{{ $transaksi->alamat }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Keterangan</label>
                                <h6>{{ $transaksi->keterangan }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Penggunaan Debit Air</label>
                                <h6>{{ $transaksi->penggunaan_debit_air }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3"></div>

                        <div class="col-md-4 mt-3">
                            <div class='border p-2'>
                                <label>Total</label>
                                <h6>{{ $transaksi->total }}</h6>
                            </div>
                        </div>

                        <div class="col-md-4 mt-3"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection