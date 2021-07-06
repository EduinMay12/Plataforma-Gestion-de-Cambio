@extends('adminlte::page')

@section('title', 'editar categoria')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Editar Categoria</div>
            </div>
        </div>
    </div>
    
@stop

@section('content')

    @livewire('modulo-capacitaciones.categorias.edit', ['categoria' => $categoria])

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
