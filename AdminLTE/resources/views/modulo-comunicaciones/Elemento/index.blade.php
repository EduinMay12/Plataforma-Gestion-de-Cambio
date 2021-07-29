@extends('adminlte::page')

@section('title', 'Gestion de Cambio |  Elemento de Comunicaciones')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4 class="center-text">Gestionar Elemento de Comunicación</h4>
        </div>
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

    @livewire('modulo-comunicacion.gestion-elemento.index')

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteElemento', elemento => {
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

                    livewire.emitTo('modulo-comunicacion.gestion-elemento.index', 'delete',
                    elemento);

                    Swal.fire(
                        'Eliminado!',
                        'Elemento de comunicación eliminado con exito',
                        'success'
                    )
                }
            })
        })
    </script>
@endsection

