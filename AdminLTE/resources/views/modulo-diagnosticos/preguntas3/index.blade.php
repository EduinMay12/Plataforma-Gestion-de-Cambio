@extends('adminlte::page')

@section('title', 'Preguntas 3')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Preguntas Opción Múltiple</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.preguntas3.index')

@endsection
