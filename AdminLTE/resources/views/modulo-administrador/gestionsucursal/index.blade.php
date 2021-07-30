@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Gestión de Sucursales')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4 class="center-text">Gestionar Sucursales</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    @livewire('modulo-administrador.gestion-sucursales.index-sucursal')

@endsection

