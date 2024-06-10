<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pengaduan Baru</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('laporan-pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="kategori">Kategori Pengaduan</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Pengaduan</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="bukti_pengaduan">Bukti Pengaduan</label>
                                <input type="file" class="form-control-file" id="bukti_pengaduan" name="bukti_pengaduan" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form action="{{ route('laporan-pengaduan.update-status', ['laporan_pengaduan' => $laporan_pengaduan->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="status_pengaduan">Status Pengaduan</label>
        <select name="status_pengaduan" id="status_pengaduan" class="form-control">
            <option value="Belum Diproses" {{ $laporan_pengaduan->status_pengaduan === 'Belum Diproses' ? 'selected' : '' }}>Belum Diproses</option>
            <option value="Sedang Diproses" {{ $laporan_pengaduan->status_pengaduan === 'Sedang Diproses' ? 'selected' : '' }}>Sedang Diproses</option>
            <option value="Sudah Selesai" {{ $laporan_pengaduan->status_pengaduan === 'Sudah Selesai' ? 'selected' : '' }}>Sudah Selesai</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Perbarui Status</button>
</form>

    @include('template.foot')
</body>

</html>
