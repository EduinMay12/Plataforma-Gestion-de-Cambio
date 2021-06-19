@section('nav')
<div class="navbar-header">
    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"> {{ Auth::user()->name }}</span>
            <img class="rounded-circle header-profile-user" src="/uploads/avatars/{{ auth()->user()->avatar }}"
                alt="Header Avatar">
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="/home"><span class="align-middle">{{ __('Inicio') }}</span> <i class="uil-home-alt font-size-18 align-middle text-muted me-1"></i></a>

            <a class="dropdown-item" href="modulo-administrador/perfil/edit"><span class="align-middle">{{ __('Perfil') }}</span> <i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i></a>
            @can('vista-administrador')
            <a class="dropdown-item d-block" href="/modulo-administrador/administrador"><span class="align-middle">{{ __('Administrador') }}</span> <i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i></a>
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
@endsection
