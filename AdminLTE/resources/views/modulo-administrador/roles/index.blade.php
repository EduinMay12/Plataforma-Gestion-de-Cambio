@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Crear una Nueva Etiqueta')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/administrador') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Etiquetas </h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Creacion de Etiquetas </span>
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

    @livewire('modulo-administrador.role.index-role')

@endsection

@extends('layouts.footer')
