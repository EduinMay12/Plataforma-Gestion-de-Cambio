@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Crear Empresa')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Editar Empresa</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <form action="{{ route('gestionempresa.update', $empresa) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="">Empresa</label>
                                <input class="form-control" type="text" name="empresa" value="{{ old('empresa', $empresa->empresa)}}">
                            </div>
                        </div>
                        <div class="col-4">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Direccion</label>
                                <input class="form-control" type="text" name="direccion" value="{{ old('direccion', $empresa->direccion)}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>No. Empleados</label>
                                <input class="form-control" type="text" name="empleados" value="{{ old('empleados', $empresa->empleados)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Codigo Postal</label>
                                <select class="form-control" name="d_codigo">
                                    <option value="">Seleccione...</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->d_codigo }}" @if ($empresa->d_codigo == $estado->d_codigo) selected @endif>
                                            {{ $estado->d_codigo }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('d_codigo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Ciudad</label>
                                <select class="form-control" name="d_ciudad">
                                    <option value="">Seleccione...</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->d_ciudad }}" @if ($empresa->d_ciudad == $estado->d_ciudad) selected @endif>
                                            {{ $estado->d_ciudad }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('d_ciudad')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Colonia</label>
                                <select class="form-control" name="d_asenta">
                                    <option value="">Seleccione...</option>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->d_asenta }}" @if ($empresa->d_asenta == $estado->d_asenta) selected @endif>
                                            {{ $estado->d_asenta }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('d_asenta')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="">Estatus</label><br>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary">
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
                        </div>
                    </div><br>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ url('modulo-administrador/gestionempresa') }}"class="btn btn-danger">Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

