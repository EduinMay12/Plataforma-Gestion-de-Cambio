@extends('adminlte::page')

@section('title', 'crear categoria')

@section('content_header')
    <h1>Crear categoria</h1>
@stop

@section('content')
    <div class="col-6">
        <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre:*</label>
                <input type="text" name="nombre" class="form-control">

                @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Descripcion:*</label>
                <input type="text" name="descripcion" class="form-control">

                @error('descripcion')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Agregar imagen:*</label>
                <input type="file" class="form-control" accept="image/*" name="imagen">

                @error('imagen')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Estatus:*</label><br>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="status" value="1" checked> Activo
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="status" value="0"> Inactivo
                    </label>
                </div>

                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Guardar</button>
                <a href="{{ route('categorias.index') }}" class="btn btn-danger">Volver</a>
            </div>
        </form>
    </div>

@endsection
