@extends('adminlte::page')

@section('title', 'Cuestionarios')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar cuestionarios</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.cuestionarios.index')

@endsection
