@extends('adminlte::page')

@section('title', 'Cuestionarios Abiertos')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Cuestionario</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.cuestionario1s.index')

    <!-- Scripts ---->

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteCuestionario1', cuestionario1Id => {
            Swal.fire({
                title: '¿Estas segur@?',
                text: "Esta accion no se podra revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar'
            }).then((result) => {
                if (result.isConfirmed) {

                    livewire.emitTo('modulo-diagnosticos.cuestionario1s.index', 'delete',
                        cuestionario1Id);

                    Swal.fire(
                        'Eliminado!',
                        'El cuestionario se a eliminado con exito',
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
