@extends('adminlte::page')

@section('title', 'Actividades')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Actividades</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.actividades.index')

@endsection
