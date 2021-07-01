@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Categorias</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    @livewire('modulo-capacitaciones.categorias.show-categorias')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
