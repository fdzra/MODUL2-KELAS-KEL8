@extends('template.template_utama_admin')

@section('content')

{{-- kita ngoding isi dari halaman front end nya disini ya gais --}}

<div class="container pt-4">
    {{-- <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Sales</strong></h5>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="myChart" height="380"></canvas>
        </div>
      </div>
    </section>
    <!-- Section: Main chart --> --}}

    <!-- INI BAGIAN TABEL KETERANGAN PELANGGAN-->
    <section class="mb-4">
      <div class="card">
        <div class="card-header text-center py-3">
          <h5 class="mb-0 text-center">
            <strong>Daftar Pelanggan</strong>
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id='datatable1' class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th scope="col">ID Transaksi</th>
                  <th scope="col">ID Pelanggan</th>
                  <th scope="col">Nama Pelanggan</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Keterangan Transaksi</th>
                  <th scope="col">Debit Air</th>
                  <th scope="col">Total Tagihan</th>
                </tr>
              </thead>

              @foreach ($dt_transaksi as $t)
              <tbody>
                <tr>
                  <td>{{$t->id_transaksi}}</td>
                  <td>{{$t->pelanggan->id}}</td>
                  <td>{{$t->pelanggan->nama_pelanggan}}</td>
                  <td>{{$t->pelanggan->alamat_pelanggan}}</td>
                  <td>{{$t->keterangan}}</td>
                  <td>{{$t->debit_air}}</td>
                  <td>{{$t->total_tagihan}}</td>
                  {{-- <td>{{$t->kecamatan_pelanggan}}</td> --}}
                  {{-- <td>{{$t->kota_pelanggan}}</td> --}}
                </tr>
              </tbody>
              @endforeach

            </table>
          </div>

          <div class="pagination">
            {{ $dt_transaksi->links() }}
          </div>
        </div>
      </div>
    </section>
    <!--Section: Sales Performance KPIs-->

    {{-- <!--Section: Minimal statistics cards-->
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
    <!--Section: Minimal statistics cards--> --}}

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

