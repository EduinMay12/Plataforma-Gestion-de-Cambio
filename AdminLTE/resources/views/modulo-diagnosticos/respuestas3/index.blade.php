@extends('adminlte::page')

@section('title', 'Respuestas 3')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Respuestas Opción Múltiple</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.respuestas3.index')

@endsection
