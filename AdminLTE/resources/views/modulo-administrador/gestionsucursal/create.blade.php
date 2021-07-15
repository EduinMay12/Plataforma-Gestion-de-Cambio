@extends('adminlte::page')

@section('title', 'Crear Sucursal')

@section('content_header')

<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
          <div class="card-title">
              <h4>Crear Sucursal</h4>
          </div>
        </div>
    </div>
</div>

@stop

@section('content')

    @livewire('modulo-administrador.gestion-sucursales.create-sucursal')

@stop

