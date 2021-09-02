@extends('adminlte::page')

@section('title', 'Agregar Cuestionario Verdadero / Falso')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Agregar Cuestionario Verdadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.cuestionario2s.create')

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

<script>
    livewire.on('error', function(message) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
            footer: ''
        })
    });
</script>

@endsection
