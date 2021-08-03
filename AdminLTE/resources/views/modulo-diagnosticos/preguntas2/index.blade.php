@extends('adminlte::page')

@section('title', 'Preguntas 2')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Preguntas Verdadero / Falso</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-diagnosticos.preguntas2.index')

@endsection
