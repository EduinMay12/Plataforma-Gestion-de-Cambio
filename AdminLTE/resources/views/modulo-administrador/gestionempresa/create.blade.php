@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Crear una Empresa')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Crear Empresa</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

    @livewire('modulo-administrador.gestion-empresas.create-empresa')
    <!-- Scripts ---->
    @livewireScripts

    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        });
    </script>

@stop


