@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Administracion')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/home') }}" class="btn btn" title="Regrasar"><i class="fa fa-home"></i></a> Administración</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración </span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
    .header-color{
        background-color: #1989ff;
        color: white;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="header-color card-header"><i class="fa fa-columns"></i> {{ __('Menu de Adminstrador') }}</div>

                <div class="card-body"><br>
                <!-- Cards de administrador -->
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <a href="users">
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon"><i class="fa fa-users"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Empleados</span>
                                        <span class="info-box-number">{{ $users_count }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="info-box bg-blue">
                                <span class="info-box-icon"><i class="fas fa-fw fa-building"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Empresas</span>
                                    <span class="info-box-number">0</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="info-box bg-blue">
                                <span class="info-box-icon"><i class="fas fa-fw fa-sitemap"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sucursales</span>
                                    <span class="info-box-number">0</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <a href="estados">
                                <div class="info-box bg-blue">
                                    <span class="info-box-icon"><i class="fas fa-fw fa-map-marked-alt"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Estados</span>
                                        <span class="info-box-number">{{ $estados_count }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@extends('layouts.footer')
