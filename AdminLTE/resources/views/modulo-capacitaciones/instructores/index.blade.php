@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Instructores</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.instructores.index')

    <!-- Scripts ---->

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteInstructore', instructoreId => {
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

                    livewire.emitTo('modulo-capacitaciones.instructores.index', 'delete',
                        instructoreId);

                    Swal.fire(
                        'Eliminado!',
                        'Instructor eliminado con exito',
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
