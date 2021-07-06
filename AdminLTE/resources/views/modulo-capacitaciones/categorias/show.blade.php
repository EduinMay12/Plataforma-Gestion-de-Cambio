@extends('adminlte::page')

@section('title', 'ver categoria')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Categoria</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <label for="">Nombre: </label>
                <span>{{ $categoria->nombre }}</span><br>

                <label for="">Descripcion: </label>
                <span>{{ $categoria->descripcion }}</span><br>

                <label for="">Numero de Cursos: </label>
                <span>{{ $categoria->contador }}</span><br>

                <label for="">Estatus: </label>
                @if ($categoria->status == 0)
                    <span>Inactivo</span><br>
                @elseif($categoria->status == 1)
                    <span>Activo</span><br>
                @endif

                <label for="">Imagen: </label><br>
                <img class="col-6" src="{{ Storage::url($categoria->imagen) }}" >

                <div class="mt-4">
                    <a href="{{ route('categorias.index') }}" class="btn btn-danger">
                        Vover
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
