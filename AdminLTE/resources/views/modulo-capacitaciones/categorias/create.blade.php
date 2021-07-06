@extends('adminlte::page')

@section('title', 'crear categoria')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Crear Categoria</div>
            </div>
        </div>
    </div>

@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
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
            </div>
        </div>
    </div>


    <!-- Scripts ---->
    @livewireScripts

    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        });
    </script>

    <!-- Scripts ---->
    @livewireScripts

    <script>
        livewire.on('alert', function(message) {
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        });
    </script>

@endsection
