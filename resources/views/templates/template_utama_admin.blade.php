<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        @yield('title') Kelompok 327 RPL
    </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <!-- Ini file CSS yang dipakai di website nya ya gais -->
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('aset/css/mdb.min.css') }}" />

    {{-- Link Untuk DataTables Fitur Pencarian --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />

    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
        }

        /* Sidebar */
        .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0; /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
        }

        @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
        }

        .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        }

    </style>
  </head>


  <body>
    <!-- Start your project here-->

    <!-- Di bagian folder template ini tuh kita cuma manggil manggilin desain yang udah dibuat -->
    <!-- sumber pengambilan nya itu bisa dari folder "kumpulan_template_FE" bisa juga dari folder "frontend" untuk isi kontennya-->

    <header> <!-- Dimasukin ke header biar kalau di scroll ga ketutup -->
        @include('template.kumpulan_template_FE.admin-sidebar')
        @include('template.kumpulan_template_FE.admin-navbar')
    </header>

    <!-- main style ini bawaan template yang dipakai jadi disesuaikan biar sesuai design nya -->
    <main style="margin-top: 58px">
        @yield('content')
    </main>

    @include('template.kumpulan_template_FE.admin-footer')

    <!-- End your project here-->


    <!-- Ini Per JS an untuk masalah script taro sini ya gais -->
    <!-- MDB -->
    <script type="text/javascript" src=" {{ asset('aset/js/mdb.umd.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

    {{-- Link JS untuk menunjang datatables --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>

    @yield('scripts')
  </body>
</html>
