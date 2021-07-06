@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Gestión de Empresas')

@section('content_header')

<div class="card">
    <div class="card-header d-flex justify-content-center">
      <div class="card-title">
        <h4>Gestionar Empresas</h4>
      </div>
    </div>
</div>

@stop

@section('content')

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    @livewire('modulo-administrador.gestion-empresas.index-empresas')

@endsection
