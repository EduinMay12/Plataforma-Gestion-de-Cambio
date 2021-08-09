@extends('adminlte::page')

@section('title', 'Ver Cuestionario Verdadero / Falso')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Cuestionario Verdadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">

                <label for="">Nombre:</label>
                <span>{{ $cuestionario2->nombre }}</span><br>

                <label for="">Descrición:</label>
                <span>{{ $cuestionario2->descripcion }}</span><br>

                <label for="">Estatus:</label>
                <span>{{ $cuestionario2->estatus }}</span><br>


                <div class="mt-4">
                    <a href="{{ route('cuestionario2s.index') }}" class="btn btn-danger">
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
