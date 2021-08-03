@extends('adminlte::page')

@section('title', 'Respuestas 2')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Respuestas Verdadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.respuestas2.index')

@endsection
