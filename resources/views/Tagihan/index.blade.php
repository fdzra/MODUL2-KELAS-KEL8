<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Riwayat Tagihan</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Tabel Riwayat Tagihan</h4>
            </div>
            <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>


                            <th>No</th>
                            <th>BULAN</th>
                            <th>TAHUN</th>
                            <th>PENGGUNAAN AIR (M3)</th>
                            <th>TAGIHAN</th>
                            <th>STATUS</th>
                            <th>DIBAYAR PADA</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="center mt-2">01</td>
                            <td class="center  mt-2">Januari</td>
                            <td class="center  mt-2">2022</td>
                            <td class="center  mt-2">13520.3 M3</td>
                            <td class="center  mt-2">Rp. 35.000</td>
                            <td class="center  mt-2">Belum Dibayar</td>
                            <td class="center  mt-2">01/05/2023 17.30</td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                Bayar Tagihan
                                </button>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tagihan Penggunaan Air</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <p>Bayar Tagihan Penggunaan Air <b></b></p>
                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" placeholder="Rp. 35.000" aria-label="Penggunaan Air (m³)" value="Rp. 35.000" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button id="btnBayarTagihan" class="btn btn-outline-success" type="button">Bayar Tagihan</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @include('template.foot')
</body>
<script>
    document.getElementById('btnBayarTagihan').addEventListener('click', function() {
        // Redirect to desired URL
        window.location.href = 'http://127.0.0.1:8000/tagihan'; // Ganti 'halaman-baru.html' dengan URL tujuan Anda
    });
</script>
</html>