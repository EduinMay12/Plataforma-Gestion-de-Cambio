@extends('adminlte::page')

@section('title', 'Ver Asignación Diagnóstico')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Asignación Diagnóstico</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">

                <label for="">Nombre:</label>
                <span>{{ $asignaciondiagnostico->user->name }}</span><br>

                <label for="">Puesto actual:</label>
                <span>{{ $asignaciondiagnostico->puesto_actual }}</span><br>

                <label for="">Puesto futuro:</label>
                <span>{{ $asignaciondiagnostico->puesto_futuro }}</span><br>

                <label for="">Puesto evaluador:</label>
                <span>{{ $asignaciondiagnostico->evaluador }}</span><br>

                <label for="">Rol diagnóstico:</label>
                <span>{{ $asignaciondiagnostico->rol_diagnostico }}</span><br>

                <label for="">Reporta a:</label>
                <span>{{ $asignaciondiagnostico->reporta_a }}</span><br>


                <div class="mt-4">
                    <a href="{{ route('asignaciondiagnosticos.index') }}" class="btn btn-danger">
                        Vover
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
