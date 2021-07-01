@extends('adminlte::page')

@section('title', 'Agregar instructor')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Agregar Instructor</div>
            </div>
        </div>
    </div>

@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-6">
                    <form action="{{ route('instructores.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Seleccionar Instructor</label>
                            <select class="form-control" name="user_id">
                                <option value="">Seleccione...</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('user_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Reseña:*</label>
                            <textarea class="form-control" name="resena" rows="10"></textarea>

                            @error('resena')
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
                            <a href="{{ route('instructores.index') }}" class="btn btn-danger">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
