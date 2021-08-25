@extends('adminlte::page')

@section('title', 'Ver Cuestionario Opción Múltiple')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Cuestionario Opción Múltiple</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">

                <label for="">Nombre:</label>
                <span>{{ $cuestionario3->nombre }}</span><br>

                <label for="">Descrición:</label>
                <span>{{ $cuestionario3->descripcion }}</span><br>

                <label for="">Estatus:</label>
                @if($cuestionario3->estatus == 2)
                <span>Inactivo</span>
                @elseif($cuestionario3->estatus == 1)
                <span>Activo</span>
                @endif                

                <br>


                <div class="mt-4">
                    <a href="{{ route('cuestionario3s.index') }}" class="btn btn-danger">
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
