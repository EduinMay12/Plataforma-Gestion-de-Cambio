@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestionar Categorias</h1>
@stop

@section('content')

    @livewire('modulo-capacitaciones.categorias.show-categorias')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
