@extends('adminlte::page')

@section('title', 'Ver puesto')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Competencias Puesto</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">

                <p><strong>Descripción: </strong>{{ $puesto->descripcion }}</p>
                <p><strong>Reporta a: </strong>{{ $puesto->reporta_a }}</p>
                @if($puesto->estatus == 2)
                <p><strong>Estatus: </strong>Inactivo</p>
                @elseif($puesto->estatus == 1)
                <p><strong>Estatus: </strong>Activo</p>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr class="th-color">
                            <th>Competencia:</th>
                            <th>Nivel:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($puesto->competencias as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            @if($item->pivot->nivel_id == 1)
                            <td>Básico</td>
                            @elseif($item->pivot->nivel_id == 2)
                            <td>Calificado</td>
                            @elseif($item->pivot->nivel_id == 3)
                            <td>Experimentado</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    <a href="{{ route('puestos.index') }}" class="btn btn-danger">
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
