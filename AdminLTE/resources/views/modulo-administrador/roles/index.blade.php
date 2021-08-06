@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Etiqueta')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Roles del sistema</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if ($message = Session::get('success'))
<div class="container">
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
</div>
@endif

    @livewire('modulo-administrador.role.index-role')

@endsection
