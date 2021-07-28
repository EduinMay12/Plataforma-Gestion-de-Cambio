@extends('adminlte::page')

@section('title', 'Ver Competencia')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Competencia</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">

                <table class="table table-bordered">

                    <tbody>

                      <tr>
                          <th>Nombre:</th><td>{{ $competencia->nombre }}</td>
                      </tr>
                      <tr>
                          <th>Descripción:</th><td>{{ $competencia->descripcion }}</td>
                      </tr>
                      <tr>
                          <th>Nivel Básico:</th>
                          <td>{{ $competencia->accionCorta1_ba }} <br>
                          {{ $competencia->accionLarga1_ba }} <br> 
                          {{ $competencia->accionCorta2_ba }} <br> 
                          {{ $competencia->accionLarga2_ba }} <br>
                          {{ $competencia->accionCorta3_ba }} <br>
                          {{ $competencia->accionLarga3_ba }} </td>
                      </tr>
                      <tr>
                          <th>Nivel Calificado:</th>
                          <td>{{ $competencia->accionCorta1_ca }} <br>
                          {{ $competencia->accionLarga1_ca }} <br> 
                          {{ $competencia->accionCorta2_ca }} <br> 
                          {{ $competencia->accionLarga2_ca }} <br>
                          {{ $competencia->accionCorta3_ca }} <br>
                          {{ $competencia->accionLarga3_ca }} </td>
                      </tr>
                      <tr>
                          <th>Nivel Experimentado:</th>
                          <td>{{ $competencia->accionCorta1_ex }} <br>
                          {{ $competencia->accionLarga1_ex }} <br> 
                          {{ $competencia->accionCorta2_ex }} <br> 
                          {{ $competencia->accionLarga2_ex }} <br>
                          {{ $competencia->accionCorta3_ex }} <br>
                          {{ $competencia->accionLarga3_ex }} </td>
                      </tr>
   
                    </tbody>
                </table><br>

                <div class="mt-4">
                    <a href="{{ route('competencias.index') }}" class="btn btn-danger">
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
