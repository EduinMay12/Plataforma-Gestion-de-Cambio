@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Gestionar Empleados')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Gestionar Empleados</h4>
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

    @livewire('modulo-administrador.user.index-user')

@endsection


