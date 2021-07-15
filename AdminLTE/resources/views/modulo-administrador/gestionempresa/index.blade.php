@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Gestión de Empresas')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Gestionar Empresas</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if (session('message'))
<div class="container">
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
</div>
@endif

    @livewire('modulo-administrador.gestion-empresas.index-empresas')
    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteEmpresa', empresa => {
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

                    livewire.emitTo('modulo-administrador.gestion-empresas.index-empresas', 'delete',
                    empresa);

                    Swal.fire(
                        'Eliminado!',
                        'Empresa eliminado con exito',
                        'success'
                    )
                }
            })
        })
    </script>
@endsection
