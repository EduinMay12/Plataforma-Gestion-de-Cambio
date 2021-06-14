@extends('adminlte::page')

@section('title', 'Crear Puesto')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/gestionempresa') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Crear Empresa</h3>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="datos card-header">Agregar Empresa</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Nombre(s)*' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Nombre*') }}" type="text" name="name" value="" required autofocus>
                            </div>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Resposable' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                    <option>Juan Perez</option>
                                    <option>Juan Pablo Castro Lara</option>
                                    <option>Melisa Rocha</option>
                                    <option>...</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'N. de Empleados' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Nombre*') }}" type="number" name="number" value="" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Direccion*' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Direccion*') }}" type="text" name="name" value="" required autofocus>
                            </div>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Colonia' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                <option>Gudalupe</option>
                                <option>Sirena</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Ciudad' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                <option>Pacabtun</option>
                                <option>Merida</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Estado' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                <option>Yucatán</option>
                                <option>Cancún</option>
                                <option>Capeche</option>
                                <option>Tabasco</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Codigo Postal*' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                    <option>97800</option>
                                    <option>97856</option>
                                    <option>97867</option>
                                    <option>...</option>
                            </select>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('Volver') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
