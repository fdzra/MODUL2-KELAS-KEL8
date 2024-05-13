<!DOCTYPE html>
<html lang="en">
@include('template.head')
@include('template.side')

<body>
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="row">
            <!-- Card Penggunaan Air -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="d-inline">Penggunaan Air</h4>
                        <div class="card-header-action">
                        <button type="button" class="btn btn-danger" id="editTargetButton" data-toggle="modal" data-target="#exampleModalCenter">
                            Edit Target
                        </button>

                        </div>
                    </div>
                    <div class="card-body">
                        @php
                            // Inisialisasi total penggunaan air
                            $totalPenggunaanAir = 0;

                            // Hitung total penggunaan air dari semua data
                            foreach($dataPenggunaanAir as $data) {
                                $totalPenggunaanAir += $data->penggunaan_air;
                            }

                            // Hitung presentase penggunaan air terhadap target penggunaan air
                            $presentase = ($totalPenggunaanAir / $targetPenggunaanAir->target_penggunaan_air) * 100;

                            // Tentukan warna progress bar berdasarkan presentase
                            $warna = $presentase >= 100 ? 'bg-danger' : 'bg-success';

                            // Pastikan presentase tidak kurang dari 0
                            $presentase = max($presentase, 0);

                        @endphp
                        
                        <div class="progress">
                        <div class="progress-bar {{ $warna }}" role="progressbar" style="width: {{ number_format($presentase, 1) }}%;" aria-valuenow="{{ number_format($presentase, 1) }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($presentase, 1) }}%</div>
                        </div>
                        <p class="mt-3">Target Penggunaan Air: {{ $targetPenggunaanAir->target_penggunaan_air ?? '' }} 
                            <span class="text-{{ $presentase < 100 ? 'success' : 'danger' }}">
                                {{ $presentase < 100 ? 'Belum Terlampaui' : 'Terlampaui' }}
                            </span>
                        </p>


                    </div>
                </div>
            </div>

            <!-- Card Tagihan Bulan Ini -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="d-inline">Tagihan Bulan Ini</h4>
                    </div>
                    <div class="card-body" style="padding-top: 10px; padding-bottom:10px">
                        <h4 class="text-center" style="margin-bottom: 10px;">Rp. 35.500</h4>
                        <div class="buttons">
                            <a href="/tagihan" class="btn btn-success btn-lg btn-block">Cek Tagihan</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Data Perangkat -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="d-inline">Data Perangkat</h4>
                        <div class="card-header-action">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewLocationModal">
                                View Location
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 10px; padding-bottom:10px">
                        <div style="display: flex; align-items: center;">
                            <span style="font-size: 1.5em; color: green;">
                                <i class="fa fa-battery-half" aria-hidden="true"></i>
                                <span style="font-size: 15px;color: green; vertical-align: middle;padding-bottom:5px; margin-left: 5px;">90%</span>
                            </span>

                            <span style="font-size: 1.5em; color: black; margin-left:20px">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                <span style="font-size: 15px;color: black; vertical-align: middle;padding-bottom:5px; margin-left: 5px;">Connected</span>
                            </span>

                            <span style="font-size: 1.5em; color: red; margin-left:20px">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                                <span style="font-size: 15px;color: red; vertical-align: middle;padding-bottom:5px; margin-left: 5px;">Weak</span>
                            </span>
                        </div>
                        <p class="mt-3">Last Update : 30/05/2023 17:33</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Card Statistik Penggunaan Air -->
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Statistik Penggunaan Air</h4>
                        <div class="card-header-action">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Bulanan</a>
                                <a href="#" class="btn">Tahunan</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Tabel Penggunaan Air -->
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-inline">Tabel Penggunaan Air</h4>
                    </div>
                    <!-- resources/views/index.blade.php -->

                    <div class="card-body">
                        <table class="table" id="sidetable">
                            <thead>
                                <tr>
                                    <th>BULAN</th>
                                    <th>TAHUN</th>
                                    <th>PENGGUNAAN AIR (M3)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataPenggunaanAir as $data)
                                <tr>
                                    <td>{{ $data->bulan }}</td>
                                    <td>{{ $data->tahun }}</td>
                                    <td>{{ $data->penggunaan_air }} M3</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIMESTAMP</th>
                            <th>FORWARD FLOW (M3)</th>
                            <th>INCREMENT (M3)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>28/01/2022 16:13</td>
                            <td>1234.5 m3</td>
                            <td>2.4 m3</td>
                        </tr>
                        <!-- Tambahkan baris lainnya -->
                    </tbody>
                </table>
            </div>
        </div>


</main>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Target Air Bulanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/target_penggunaan_air">
                        @csrf
                            <p>Rekomendasi Target Air : <b>15m³</b></p>
                            <div class="input-group mb-3 mt-3">
                                <input type="number" class="form-control" placeholder="Penggunaan Air (m³)" aria-label="Penggunaan Air (m³)" aria-describedby="basic-addon2" name="target_penggunaan_air" value="{{ isset($targetPenggunaanAir) ? $targetPenggunaanAir->target_penggunaan_air : '' }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-success" type="submit">Edit Target Air</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk View Location -->
        <div class="modal fade" id="viewLocationModal" tabindex="-1" role="dialog" aria-labelledby="viewLocationModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewLocationModalTitle">View Location</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="mapContainer" style="height: 400px;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        @include('template.foot')
    </section>
 <!-- Skrip JavaScript untuk Google Maps -->
 <script>
        // Fungsi untuk inisialisasi peta pada modal
        function initMap() {
            // Koordinat lokasi yang ingin ditampilkan pada peta
            var myLatLng = { lat: -6.2088, lng: 106.8456 };

            // Membuat objek peta dengan koordinat awal
            var map = new google.maps.Map(document.getElementById('mapContainer'), {
                zoom: 15,
                center: myLatLng
            });

            // Menambahkan marker pada peta
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Lokasi Perangkat'
            });
        }
    </script>
    <!-- Panggil API Google Maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzIenqMIjea__jnH7EtyVoBB07jyK7MYc&callback=initMap"></script>
</body>

</html>

