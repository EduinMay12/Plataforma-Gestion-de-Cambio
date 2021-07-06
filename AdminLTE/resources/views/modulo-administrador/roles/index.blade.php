@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Etiqueta')

@section('content_header')

<div class="card">
    <div class="card-header d-flex justify-content-center">
      <div class="card-title">
        <h4>Etiquetas</h4>
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
