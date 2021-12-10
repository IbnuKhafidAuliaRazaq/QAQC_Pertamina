<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E & M Verification Pertamina Application">
    <meta name="author" content="Altamasoft.tech">   
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Barcoding | Admin</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ url('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/argon.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
</head>

<body>
    @include('template.nav')
    <div id="panel" class="main-content">
        @include('template.header')
        @yield('app')
    </div>
    {{-- <div class="toast-message"></div> --}}
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js') }}"></script>
    <script>
        $('.datatable-init').dataTable({
            dom: 'Bfrtip',
            buttons:[
                { 'extend' : 'excel', 'text' : 'Export Excel', 'className' : 'btn btn-success btn-sm' },
                // 'excelHtml5',
                { 'extend' : 'pdf', 'text' : 'Export PDF', 'className' : 'btn btn-danger btn-sm' },
            ],
            select: true,
            // responsive:true,
            columnDefs: [ {
                className: 'dtr-control',
                orderable: false,
                targets:   0
            } ],
        });
        $('div.dataTables_filter label')[0].childNodes[0].nodeValue = "";
        $('div.dataTables_filter input').addClass('form-control form-control-sm ');
        $('div.dataTables_filter').addClass('d-flex justify-content-center d-md-inline-block px-0');
        $('div.dt-buttons').addClass('px-0');
        $('div.dt-buttons button.buttons-excel').removeClass('dt-button');
        $('div.dt-buttons button.buttons-pdf').removeClass('dt-button');
        $('div.dt-buttons').addClass('px-0');
    </script>
    @if (session()->has('success'))
        <script>
            NioApp.Toast('Aksi berhasil', 'success', {
                position: 'top-right'
            });
        </script>
    @endif

    @yield('js')
</body>

</html>