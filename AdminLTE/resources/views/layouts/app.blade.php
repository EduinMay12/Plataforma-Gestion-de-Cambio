<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Gestion de Cambio | Inicio') }}</title>
    <!-- Bootstrap Css -->
    <link href="{{ url('css/bootstrap.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('css/app.rtl.css') }}" rel="stylesheet" type="text/css" />

    <link href="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css" rel="stylesheet">
    <link href="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/datepicker/datepicker.min.css">

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

    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/select2/select2.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/datepicker/datepicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/js/pages/form-advanced.init.js"></script>

    @stack('javascript')
</body>

</html>

