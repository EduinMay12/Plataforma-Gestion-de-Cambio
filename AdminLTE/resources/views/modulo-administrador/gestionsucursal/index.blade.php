@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Gestión de Sucursales')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4 class="center-text">Gestionar Sucursal</h4>
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

    @livewire('modulo-administrador.gestion-sucursales.index-sucursal')

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
        livewire.on('deleteSucursal', sucursal => {
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

                    livewire.emitTo('modulo-administrador.gestion-sucursales.index-sucursal', 'delete',
                    sucursal);

                    Swal.fire(
                        'Eliminado!',
                        'Sucursal eliminado con exito',
                        'success'
                    )
                }
            })
        })
    </script>
@endsection

