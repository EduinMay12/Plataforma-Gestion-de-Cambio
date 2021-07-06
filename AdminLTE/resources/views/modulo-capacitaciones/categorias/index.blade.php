@extends('adminlte::page')

@section('title', 'categorias')

@section('content_header')

    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <div class="card-title">Gestionar Categorias</div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.categorias.show-categorias')

    <!-- Scripts ---->

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteCategoria', categoriaId => {
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

                    livewire.emitTo('modulo-capacitaciones.categorias.show-categorias', 'delete', categoriaId);

                    Swal.fire(
                        'Eliminado!',
                        'Categoria eliminada con exito',
                        'success'
                    )
                }
            })
        })
    </script>

@stop

