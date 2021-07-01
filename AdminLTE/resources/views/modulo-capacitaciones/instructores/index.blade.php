@extends('adminlte::page')

@section('title', 'Instructores')

@section('content_header')  

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Gestionar Instructores</div>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

@stop

@section('content')

    @livewire('modulo-capacitaciones.instructores.index')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
