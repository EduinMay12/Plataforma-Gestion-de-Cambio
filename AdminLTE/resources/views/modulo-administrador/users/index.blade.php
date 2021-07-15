@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Usuarios')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Lista de Usuarios</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if ($message = Session::get('success'))
<div class="container">
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
</div>
@endif

    @livewire('modulo-administrador.user.index-user')
   <!-- Scripts ---->

   @livewireScripts

   <script src="sweetalert2.all.min.js"></script>
   <script>
       livewire.on('deleteUsers', users => {
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

                   livewire.emitTo('modulo-administrador.user.index-user', 'delete',
                   users);

                   Swal.fire(
                       'Eliminado!',
                       'Usuario eliminado con exito',
                       'success'
                   )
               }
           })
       })
   </script>

@endsection


