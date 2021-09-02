@extends('adminlte::page')

@section('title', 'Crear Articulo')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Crear nuevo Articulos</div>
            </div>
        </div>

        <form action="/articulos" method="POST">
            @csrf
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">    
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input id="categoria" name="categoria" type="text" class="form-control" tabindex="2">
          </div>
          <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
          <a href="/articulos" class="btn btn-secondary" tabindex="5">Volver</a>
        </form>
    </div>
@include('sweetalert::alert')
@stop

@section('content')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
