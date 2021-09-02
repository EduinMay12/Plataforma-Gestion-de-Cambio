@extends('adminlte::page')

@section('title', 'Editar Articulo')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Editar Articulos</div>
            </div>
        </div>

        <form action="/articulos/{{$articulo->id}}" method="POST">
            @csrf    
            @method('PUT')
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$articulo->nombre}}">    
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input id="categoria" name="categoria" type="text" class="form-control" value="{{$articulo->categoria}}">
          </div>
          <button type="submit" class="btn btn-primary">Actualizar</button>
          <a href="/articulos" class="btn btn-secondary">Volver</a>
        </form>
    </div>
    
@include('sweetalert::alert')

@stop

@section('content')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
