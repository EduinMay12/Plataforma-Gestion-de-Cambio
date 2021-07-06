@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Crear Empresa')

@section('content_header')

<div class="card">
    <div class="card-header d-flex justify-content-center">
      <div class="card-title">
        <h4>Editar Empresa</h4>
      </div>
    </div>
</div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-6">
            <form action="{{ route('gestionempresa.update', $empresa) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Responsable</label>
                    <select class="form-control" name="user_id">
                        <option value="">Seleccione...</option>
                        @foreach ($user as $user)
                            <option value="{{ $user->id }}" @if ($empresa->user_id == $user->id) selected @endif>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Estatus</label><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="estatus" value="1" @if ($empresa->estatus == 1) checked @endif>
                            Activo
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="estatus" value="0" @if ($empresa->estatus == 0) checked @endif>
                            Inactivo
                        </label>
                    </div>

                    @error('estatus')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xs-12">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ url('modulo-administrador/gestionempresa') }}"class="btn btn-danger">Volver</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@extends('layouts.footer')
