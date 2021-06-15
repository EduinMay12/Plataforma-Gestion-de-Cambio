<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Gestion de Cambio | Inicio') }}</title>
    <!-- Bootstrap Css -->
    <link href="{{ url('css/bootstrap.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('css/app.rtl.css') }}" rel="stylesheet" type="text/css" />
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

                        <a class="dropdown-item d-block" href="/administrador"><span class="align-middle">{{ __('Administrador') }}</span> <i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i></a>

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

</body>

</html>

