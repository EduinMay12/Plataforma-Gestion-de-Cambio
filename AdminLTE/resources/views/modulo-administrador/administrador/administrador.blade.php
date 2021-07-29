@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Administracion')

@section('content_header')

<div class="container">
    <div class="row">

        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p class="text-white font-size-18"><b>{{ $users_count }}</b> Total de Empleados</p>
                            <div class="mt-4">
                                <a href="/modulo-administrador/users" class="btn btn-secondary waves-effect waves-light">ir a la tabla</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <img src="../img/administrador/empresa.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p class="text-white font-size-18"><b> {{ $empresa_count }}</b> Total de Empresas</p>
                            <div class="mt-4">
                                <a href="/modulo-administrador/gestionempresa" class="btn btn-secondary waves-effect waves-light">ir a la tabla</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <img src="../img/administrador/sucursales.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-8">
                            <p class="text-white font-size-18"><b> {{ $sucursal_count }}</b> Total de Sucursales</p>
                            <div class="mt-4">
                                <a href="/modulo-administrador/gestionsucursal" class="btn btn-secondary waves-effect waves-light">ir a la tabla</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mt-4 mt-sm-0">
                                <img src="../img/administrador/empresas.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@stop


