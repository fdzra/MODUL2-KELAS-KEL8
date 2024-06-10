<!-- resources/views/request-pemasangan/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Detail Request Pemasangan</h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $requestPemasangan->nama }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" id="umur" name="umur" value="{{ $requestPemasangan->umur }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" readonly>{{ $requestPemasangan->alamat_lengkap }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $requestPemasangan->kecamatan }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $requestPemasangan->kode_pos }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">Nomor KTP</label>
                            <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $requestPemasangan->no_ktp }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="foto_ktp">Foto KTP</label>
                            <img src="{{ asset('storage/' . $requestPemasangan->foto_ktp) }}" alt="Foto KTP" class="img-fluid">
                        </div>
                        <div class="form-group">
                            <label for="nomor_kk">Nomor KK</label>
                            <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" value="{{ $requestPemasangan->nomor_kk }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb-3">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('template.foot')
</body>

</html>
