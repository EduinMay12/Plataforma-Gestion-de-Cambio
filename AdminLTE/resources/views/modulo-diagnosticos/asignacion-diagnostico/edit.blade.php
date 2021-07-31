@extends('adminlte::page')

@section('title', 'Editar Asignación Diagnóstico')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Editar Asignación Diagnóstico</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.asignacion-diagnostico.edit', ['asignaciondiagnostico' => $asignaciondiagnostico])

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

@endsection
