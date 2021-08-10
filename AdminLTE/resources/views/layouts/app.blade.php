<!doctype html>
<html lang="en">

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
    <!-- Navbar -->
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"> {{ Auth::user()->name }}</span>
                        <img class="rounded-circle header-profile-user" src="../uploads/avatars/{{ auth()->user()->avatar }}"
                            alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="/home"><span class="align-middle">{{ __('Inicio') }}</span> <i class="uil-home-alt font-size-18 align-middle text-muted me-1"></i></a>

                        <a class="dropdown-item" href="/perfil/edit"><span class="align-middle">{{ __('Perfil') }}</span> <i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i></a>
                        @can('vista-administrador')
                        <a class="dropdown-item d-block" href="/administrador"><span class="align-middle">{{ __('Administrador') }}</span> <i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i></a>
                        @endcan
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Salir') }}<i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                        </a>


                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/home" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="vendor/adminlte/dist/img/edumatics.png" alt="" height="32">
                                </span>
                                <span class="logo-lg">
                                    <img src="vendor/adminlte/dist/img/edumatics.png" alt="" height="30">
                                </span>
                            </a>

                            <a href="/home" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="vendor/adminlte/dist/img/edumatics.png" alt="" height="32">
                                </span>
                                <span class="logo-lg">
                                    <img src="vendor/adminlte/dist/img/edumatics.png" alt="" height="30">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @yield('header-gestion')
        </header>
    <!-- ============================================================== -->
        <!-- Contenido del sistema -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
<<<<<<< HEAD
            @yield('menu')
            @yield('content')
            @yield('footer')
=======

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © EDUMATICS
                        </div>

                    </div>
                </div>
            </footer>
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
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

<<<<<<< HEAD
    @stack('javascript')
=======
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/select2/select2.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/libs/datepicker/datepicker.min.js"></script>
    <script src="http://minible-h-rtl.laravel.themesbrand.com/assets/js/pages/form-advanced.init.js"></script>
>>>>>>> parent of 0816fa7 (Actualizacion Sections)
</body>

</html>
