@extends('adminlte::page')

@section('title', 'Lecciones')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Lecciones</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.lecciones.index')

@endsection
