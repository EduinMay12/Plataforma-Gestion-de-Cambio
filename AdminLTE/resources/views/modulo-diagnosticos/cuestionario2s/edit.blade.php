@extends('adminlte::page')

@section('title', 'Editar Cuestionario Verdadero / Falso')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Editar Cuestionario Vedadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.cuestionario2s.edit', ['cuestionario2' => $cuestionario2])

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
