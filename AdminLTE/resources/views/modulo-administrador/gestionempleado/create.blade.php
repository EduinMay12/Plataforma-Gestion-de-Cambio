@extends('adminlte::page')

@section('title', 'Crear Puesto')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('modulo-administrador/gestionempleado') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Crear Personal</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Gestionar Personal <i class="fa fa-angle-right"></i> Crear Personal</span>
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
        <div class="col-md-6">
            <div class="card">
                <div class="datos card-header">Datos de la Persona</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <img src="#" width="150" height="150" class="rounded-circle">
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Nombre(s)*' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Nombre*') }}" type="text" name="name" value="" required autofocus>
                            </div>
                        </div>
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Apellido(s)*' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Apellido*') }}" type="text" name="name" value="" required autofocus>
                            </div>
                        </div>
                        <div class="col">
                            <label for="" class="control-label">{{ 'Dirreccion' }}</label>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control" placeholder="{{ __('Dirreccion') }}" type="text" name="name" value="" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="user" class="control-label">{{ 'Ciudad' }}</label>
                            <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                    <option>Pacabtun</option>
                                    <option>Merida</option>
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
                    </div><br>
                    <div class="row">
                        <div class="col">
                        <label for="competencia" class="control-label">{{ 'Nueva Contraseña*' }}</label>
                            <div class="input-group input-group-alternative">
                                <input class="form-control" placeholder="{{ __('Ingresar una contraseña') }}" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="col">
                        <label for="competencia" class="control-label">{{ 'Comfirmar Contraseña' }}</label>
                            <div class="input-group input-group-alternative">
                                <input class="form-control" placeholder="{{ __('Confirma la Contraswña') }}" type="password" name="password_confirmation" required>
                            </div>
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="datos card-header">Datos de la Empresa</div>
                <div class="card-body">
                    <form role="form" method="POST" action="">

                        <div class="row">
                            <div class="col">
                                <label for="user" class="control-label">{{ 'Empresa' }}</label>
                                <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                        <option>Bepensa</option>
                                        <option>Dunosusa</option>
                                        <option>Bebidas Yucatán</option>
                                        <option>...</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="user" class="control-label">{{ 'Sucursal' }}</label>
                                <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                        <option>Merida</option>
                                        <option>Valladolid</option>
                                        <option>Pacabtún</option>
                                        <option>Maxcanu</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label for="user" class="control-label">{{ 'Puesto Actual' }}</label>
                                <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                        <option>Recidente de Obra</option>
                                        <option>Jefe Legal</option>
                                        <option>Gerente de Planta</option>
                                        <option>Coordinador de Escuela Expendio</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="user" class="control-label">{{ 'Puesto Futuro' }}</label>
                                <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                        <option>Recidente de Obra</option>
                                        <option>Jefe Legal</option>
                                        <option>Gerente de Planta</option>
                                        <option>Coordinador de Escuela Expendio</option>
                                </select>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label for="user" class="control-label">{{ 'Tipo de Persona' }}</label>
                                <select name="tipo" class="form-control" placeholder="{{ __('Nombre de la Persona') }}" id="tipo" type="text" name="tipo" value="" >

                                        <option>Evaluador</option>
                                        <option>Jefe Legal</option>
                                        <option>Homologo</option>
                                        <option>Couch</option>
                                </select>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Volver') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@extends('layouts.footer')
