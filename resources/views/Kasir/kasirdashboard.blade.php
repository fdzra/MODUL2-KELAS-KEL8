@extends('KasirLayouts.kasir')

@section('content')

<div class="container pt-4">
    <div class="row">
        <!-- Section: Main chart -->

        {{-- INI BELUM TERPAKAI --}}
        {{-- <section class="mb-4">
        <div class="card">
            <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
            </div>
            <div class="card-body">
            <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
            </div>
        </div>
        </section> --}}
        <!-- Section: Main chart -->

    <!--Section: Sales Performance KPIs-->
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
                    <table id = 'datatable1' class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Buat Pesanan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $user as $u)
                            <tr>
                                <th scope="row">{{ $u->name }}</th>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->role }}</td>
                                <td>
                                    @if ($u->role === 'pelanggan')
                                        <a href="/admin/kasir/pembayaran" class="btn btn-primary">Buat Transaksi</a>
                                    @endif
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
        <!--Section: Sales Performance KPIs-->

        <!--Section: Sales Performance KPIs-->
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
                        <table id = 'datatable2' class="table table-hover text-nowrap">
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
                            <th scope="col">Detail Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $transaksi as $t)
                                <tr>
                                    <th scope="row">{{ $t->id_transaksi }}</th>
                                    <td>{{ $t->nama_pelanggan }}</td>
                                    <td>{{ $t->no_handphone }}</td>
                                    <td>{{ $t->nama_perangkat }}</td>
                                    <td>{{ $t->alamat }}</td>
                                    <td>{{ $t->keterangan }}</td>
                                    <td>{{ $t->penggunaan_debit_air }}</td>
                                    <td>{{ $t->total }}</td>
                                    <td>
                                        <a href="{{ url('detail-transaksi/'.$t->id_transaksi)}}" class="btn btn-primary">Detail Transaksi</a>
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
      <!--Section: Sales Performance KPIs-->
    </div>
    <!-- Section: Main chart -->

    <!--Section: Minimal statistics cards-->
    <section>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-pencil-alt text-info fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>278</h3>
                  <p class="mb-0">New Posts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="far fa-comment-alt text-warning fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>156</h3>
                  <p class="mb-0">New Comments</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-chart-line text-success fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>64.89 %</h3>
                  <p class="mb-0">Bounce Rate</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div class="align-self-center">
                  <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                </div>
                <div class="text-end">
                  <h3>423</h3>
                  <p class="mb-0">Total Visits</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-danger">278</h3>
                  <p class="mb-0">New Projects</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-rocket text-danger fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-success">156</h3>
                  <p class="mb-0">New Clients</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-user text-success fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-warning">64.89 %</h3>
                  <p class="mb-0">Conversion Rate</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-chart-pie text-warning fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-info">423</h3>
                  <p class="mb-0">Support Tickets</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-life-ring text-info fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-info">278</h3>
                  <p class="mb-0">New Posts</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-book-open text-info fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-warning">156</h3>
                  <p class="mb-0">New Comments</p>
                </div>
                <div class="align-self-center">
                  <i class="far fa-comments text-warning fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-success">64.89 %</h3>
                  <p class="mb-0">Bounce Rate</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-mug-hot text-success fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between px-md-1">
                <div>
                  <h3 class="text-danger">423</h3>
                  <p class="mb-0">Total Visits</p>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-map-signs text-danger fa-3x"></i>
                </div>
              </div>
              <div class="px-md-1">
                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Minimal statistics cards-->

    <!--Section: Statistics with subtitles-->
    <section>
      <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                  </div>
                  <div>
                    <h4>Total Posts</h4>
                    <p class="mb-0">Monthly blog posts</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">18,000</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                  </div>
                  <div>
                    <h4>Total Comments</h4>
                    <p class="mb-0">Monthly blog posts</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <h2 class="h1 mb-0">84,695</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                  </div>
                  <div>
                    <h4>Total Sales</h4>
                    <p class="mb-0">Monthly Sales Amount</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <i class="far fa-heart text-danger fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between p-md-1">
                <div class="d-flex flex-row">
                  <div class="align-self-center">
                    <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                  </div>
                  <div>
                    <h4>Total Cost</h4>
                    <p class="mb-0">Monthly Cost</p>
                  </div>
                </div>
                <div class="align-self-center">
                  <i class="fas fa-wallet text-success fa-3x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section: Statistics with subtitles-->
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable();
            $('#datatable2').DataTable();
        });
    </script>
@endsection
