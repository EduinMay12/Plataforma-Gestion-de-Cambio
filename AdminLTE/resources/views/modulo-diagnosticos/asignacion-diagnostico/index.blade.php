@extends('adminlte::page')

@section('title', 'Asignación Diagnóstico')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Asignación Diagnóstico</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.asignacion-diagnostico.index')

    <!-- Scripts ---->

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteAsignaciondiagnostico', asignaciondiagnosticoId => {
            Swal.fire({
                title: '¿Estas segur@?',
                text: "Esta acción no se podra revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {

                    livewire.emitTo('modulo-diagnosticos.asignacion-diagnostico.index', 'delete',
                        asignaciondiagnosticoId);

                    Swal.fire(
                        'Eliminado!',
                        'Asignación diagnóstico eliminado con exito',
                        'success'
                    )
                }
            })
        })
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop