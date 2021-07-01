@extends('adminlte::page')

@section('title', 'Crear Puesto')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/gestionempresa') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Crear Empresa</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Gestionar Empresa <i class="fa fa-angle-right"></i> Crear Empresa</span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
    .datos{
        background-color: #1989ff;
        color: white;
    }
</style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="datos card-header">Agregar Empresa</div>
                <div class="card-body">
                    <div class="col-6">
                        <form action="{{ route('gestionempresa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre de la Empresa :*</label>
                                <input type="text" name="empresa" class="form-control">

                                @error('empresa')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">N. de Empleados :*</label>
                                <input type="number" name="empleados" class="form-control">

                                @error('empleados')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Responsable :*</label>
                                <input type="text" name="id_persona" class="form-control">

                                @error('id_persona')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Estado :*</label>
                                <input type="text" name="id_estado" class="form-control">

                                @error('id_estado')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Colonia :*</label>
                                <input type="text" name="id_colonia" class="form-control">

                                @error('id_colonia')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ciudad :*</label>
                                <input type="text" name="id_ciudad" class="form-control">

                                @error('id_ciudad')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Codigo :*</label>
                                <input type="text" name="id_codigo" class="form-control">

                                @error('id_codigo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <button class="btn btn-primary">Guardar</button>
                                <a href="{{ route('gestionempresa.index') }}" class="btn btn-danger">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

