@extends('adminlte::page')

@section('title', 'Editar Cuestionario')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Editar Cuestionario Abierto</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.cuestionario1s.edit', ['cuestionario1' => $cuestionario1])

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
