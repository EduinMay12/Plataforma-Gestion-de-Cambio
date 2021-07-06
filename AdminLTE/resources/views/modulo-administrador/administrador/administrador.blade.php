@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Administracion')

@section('content_header')

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="mb-1 mt-1"><i class="fa fa-users"></i><span data-plugin="text-success me-1"> {{ $users_count }}</span></h4>
                    <p class="text-muted mb-0">Total de Usuarios</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div>
                    <h4 class="mb-1 mt-1"><i class="fa fa-map-marked-alt"></i><span data-plugin="text-success me-1"> {{ $estados_count }}</span></h4>
                    <p class="text-muted mb-0">Total de Estados</p>
                </div>
            </div>
        </div>
    </div>
</div>

@stop


