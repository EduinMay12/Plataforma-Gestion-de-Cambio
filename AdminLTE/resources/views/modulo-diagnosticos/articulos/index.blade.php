@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Articulos</div>
            </div>
        </div>

        <a href="articulos/create" class="btn btn-primary">Crear Articulo</a>

        <table class="table table-dark table-striped mt-4">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>    
              @foreach ($articulos as $articulo)
              <tr>
                  <td>{{$articulo->id}}</td>
                  <td>{{$articulo->nombre}}</td>
                  <td>{{$articulo->categoria}}</td>
                  <td>
                   <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>         
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                   </form>          
                  </td>        
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

@include('sweetalert::alert')

@stop

@section('content')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
