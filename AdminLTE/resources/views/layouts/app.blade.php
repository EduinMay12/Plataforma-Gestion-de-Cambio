<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Gestion de Cambio | Inicio') }}</title>
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./css/spectrum-colorpicker.min.css') }}" rel="stylesheet">

    <link href="{{ asset('./css/bootstrap-touchspin.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('./css/datepicker.min.css') }}">
    <!-- DataTables -->
    <link href="{{ asset('./css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body data-layout="horizontal" data-topbar="colored">
    <!-- ============================================================== -->
        <!-- Navbar & Header del sistema -->
    <!-- ============================================================== -->
        <header id="page-topbar">
            @yield('nav')
            @yield('header')
        </header>
    <!-- ============================================================== -->
        <!-- Contenido Menu & footer del sistema -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            @yield('menu')
            @yield('content')
            @yield('footer')
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/metismenu.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/node-waves.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery-counterup.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

    @stack('javascript')
</body>

</html>
