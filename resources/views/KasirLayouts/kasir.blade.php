<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />



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
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/mdb2.min.css')}}" />

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css')}}"/>

    <link href="{{ asset('assets/css/datatables.min.css')}}" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- Start your project here-->

    <header>
        @include('KasirLayouts.KasirInc.kasirsidebar')
        @include('KasirLayouts.KasirInc.kasirnavbar')
    </header>

    <!--Main layout-->
    <main style="margin-top: 58px">
        @yield('content')
    </main>

    @include('KasirLayouts.KasirInc.kasirfooter')



    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('assets/js/mdb.umd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb2.umd.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('assets/js/admin.js')}}"></script>

    <script src="{{ asset('assets/js/datatables.min.js')}}"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script><script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
    
    @yield('scripts')
  </body>
</html>
