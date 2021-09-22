@extends('adminlte::page')

@section('title', 'Asignación de Cuestionarios')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Asignación de Cuestionarios Verdadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.asignacioncuestionarios.index')

@endsection
