@extends('adminlte::page')

<<<<<<< HEAD:AdminLTE/resources/views/modulo-diagnosticos/cuestionario1s/index.blade.php
@section('title', 'Cuestionarios Abiertos')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Cuestionario</div>
            </div>
=======
@section('title', 'Gestion de Cambio |  Elemento de Comunicaciones')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4 class="center-text">Gestionar Elemento de Comunicación</h4>
        </div>
>>>>>>> d92f74e (Merge remote-tracking branch 'remotes/origin/Eduin_May' into Emiliano_Cocom):AdminLTE/resources/views/modulo-comunicaciones/Elemento/index.blade.php
        </div>
    </div>

@stop

@section('content')

<<<<<<< HEAD:AdminLTE/resources/views/modulo-diagnosticos/cuestionario1s/index.blade.php
    @livewire('modulo-diagnosticos.cuestionario1s.index')

    <!-- Scripts ---->
=======
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

    @livewire('modulo-comunicacion.gestion-elemento.index')
>>>>>>> d92f74e (Merge remote-tracking branch 'remotes/origin/Eduin_May' into Emiliano_Cocom):AdminLTE/resources/views/modulo-comunicaciones/Elemento/index.blade.php

    @livewireScripts

    <script src="sweetalert2.all.min.js"></script>
    <script>
<<<<<<< HEAD:AdminLTE/resources/views/modulo-diagnosticos/cuestionario1s/index.blade.php
        livewire.on('deleteCuestionario1', cuestionario1Id => {
=======
        livewire.on('deleteElemento', elemento => {
>>>>>>> d92f74e (Merge remote-tracking branch 'remotes/origin/Eduin_May' into Emiliano_Cocom):AdminLTE/resources/views/modulo-comunicaciones/Elemento/index.blade.php
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

<<<<<<< HEAD:AdminLTE/resources/views/modulo-diagnosticos/cuestionario1s/index.blade.php
                    livewire.emitTo('modulo-diagnosticos.cuestionario1s.index', 'delete',
                        cuestionario1Id);

                    Swal.fire(
                        'Eliminado!',
                        'El cuestionario se a eliminado con exito',
=======
                    livewire.emitTo('modulo-comunicacion.gestion-elemento.index', 'delete',
                    elemento);

                    Swal.fire(
                        'Eliminado!',
                        'Elemento de comunicación eliminado con exito',
>>>>>>> d92f74e (Merge remote-tracking branch 'remotes/origin/Eduin_May' into Emiliano_Cocom):AdminLTE/resources/views/modulo-comunicaciones/Elemento/index.blade.php
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
