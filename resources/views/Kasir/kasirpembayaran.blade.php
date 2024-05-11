@extends('KasirLayouts.kasir')

@section('content')

<div class="container pt-4">
    <section class="py-2">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>Form Pembayaran</strong>
                </h5>
            </div>

            <div class="card-body">
                <div class="container">

                    <form action="{{ url('place-order')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Nomor Handphone Aktif</label>
                                    <input type="text" name="no_handphone" class="form-control" placeholder="Nomor Handphone Aktif">
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Nama Perangkat</label>
                                    <input type="text" name="nama_perangkat" class="form-control" placeholder="nama perangkat">
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Debit Air Terpakai</label>
                                    <input type="text" name="penggunaan_debit_air" class="form-control" placeholder="Debit Air Terpakai">
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Total Biaya</label>
                                    <input type="text" name="total" class="form-control" placeholder="Total Biaya">
                                </div>
                            </div>

                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                                </div>
                            </div>

                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows='4' placeholder="Alamat"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 mt-4 mx-auto">
                                <button type='submit' name="buat_pesanan_btn" class="btn btn-primary btn-block">Konfirmasi Pembayaran</button>
                            </div>
                    </form>
                    </div>
            </div>

        </div>
    </section>
</div>

@endsection
