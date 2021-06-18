@extends('layouts.app')

@section('header-gestion')
<div class="container-fluid">
    <div class="topnav">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">
                        <i class="uil-home-alt me-2"></i> Inicio </a>
                    </li>
                    <li class="nav-item dropdown">
                        @can('vista-administrador')
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button">
                            <i class="uil-flask me-2"></i> Super Usuario <div class="arrow-down"></div>
                        </a>
                        @endcan

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="text-left">
                                        <a href="perfil/edit" class="dropdown-item">Perfil</a>
                                        <a href="administrador" class="dropdown-item">Panel del Administrador</a>
                                        <a href="roles" class="dropdown-item">Etiquetas</a>
                                        <a href="users" class="dropdown-item">Usuarios</a>
                                        <a href="gestionempresa" class="dropdown-item">Gestion de Empresas</a>
                                        <a href="gestionsucursal" class="dropdown-item">Gestion de Sucursales</a>
                                        <a href="gestionempleados" class="dropdown-item">Gestion de Empleados</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-lightbox" class="dropdown-item">Lightbox</a>
                                        <a href="ui-modals" class="dropdown-item">Modals</a>
                                        <a href="ui-rangeslider" class="dropdown-item">Range Slider</a>
                                        <a href="ui-session-timeout" class="dropdown-item">Session Timeout</a>
                                        <a href="ui-progressbars" class="dropdown-item">Progress Bars</a>
                                        <a href="ui-sweet-alert" class="dropdown-item">Sweet-Alert</a>
                                        <a href="ui-tabs-accordions" class="dropdown-item">Tabs & Accordions</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="ui-typography" class="dropdown-item">Typography</a>
                                        <a href="ui-video" class="dropdown-item">Video</a>
                                        <a href="/estados" class="dropdown-item">Estados</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/estado">
                        <i class="uil-map me-2"></i> Estados </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@stop

@section('content')
<style>
    .th-color{
        background-color: #1989ff;
        color: white;
    }
</style>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="th-color">
                                    <th>Código Postal Asentamiento</th>
                                    <th>Nombre Asentamiento</th>
                                    <th>Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Nombre Municipio (INEGI, Marzo 2013)</th>
                                    <th>Nombre Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Clave Municipio (INEGI, Marzo 2013)</th>
                                    <th>Identificador Único del Asentamiento (Nivel Municipal)</th>
                                    <th>Zona en la que se Ubica el Asentamiento (Urbano/Rural)</th>
                                </tr>
                                @foreach ($estados as $estados)
                                <tr>
                                    <td>{{ $estados->d_codigo }}</td>
                                    <td>{{ $estados->d_asenta }}</td>
                                    <td>{{ $estados->d_tipo_asenta }}</td>
                                    <td>{{ $estados->d_mnpio }}</td>
                                    <td>{{ $estados->d_estado }}</td>
                                    <td>{{ $estados->d_cp }}</td>
                                    <td>{{ $estados->c_estado }}</td>
                                    <td>{{ $estados->c_oficina }}</td>
                                    <td>{{ $estados->c_tipo_asenta }}</td>
                                    <td>{{ $estados->c_mnpio }}</td>
                                    <td>{{ $estados->id_asenta_cpcons }}</td>
                                    <td>{{ $estados->d_zona }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection
