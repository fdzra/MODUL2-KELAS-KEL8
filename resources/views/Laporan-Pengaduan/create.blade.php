<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1> Formulir Laporan Pengaduan</h1>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Laporan Pengaduan</h4>
                    </div>
                    <div class="card-body">
                        <!-- Display Error jika ada error -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('laporan-pengaduan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Kategori Laporan Pengaduan</label>
                                <select class="form-control" name="kategori">
                                    <option value="Software">Software</option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Jaringan">Jaringan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Bukti laporan Pengaduan</label>
                                <input type="file" name="bukti_pengaduan" class="form-control">
                            </div>

                            <div class="form-group text-right"> <!-- Gunakan class text-right untuk menggeser ke kanan -->
                                <button type="submit" class="btn btn-success">Submit Formulir</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
    </section>

    @include('template.foot')
</body>

</html>