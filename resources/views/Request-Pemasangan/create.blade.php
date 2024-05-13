<!-- resources/views/request-pemasangan/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Request Pemasangan</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Formulir Request Pemasangan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('request-pemasangan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur" required>
                            </div>
                            <div class="form-group">
                                <label for="umur">Nomor Telepon</label>
                                <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_lengkap">Alamat Lengkap</label>
                                <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
                            </div>
                            <div class="form-group">
                                <label for="no_ktp">Nomor KTP</label>
                                <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <input type="file" class="form-control-file" id="foto_ktp" name="foto_ktp" required>
                            </div>
                            <div class="form-group">
                                <label for="nomor_kk">Nomor KK</label>
                                <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required>
                            </div>
                            <form action="{{ route('request-pemasangan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Isi formulir sesuai dengan kebutuhan -->
                            <div class="form-group text-right"> <!-- Gunakan class text-right untuk menggeser ke kanan -->
                            <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('template.foot')
</body>

</html>
