@extends('adminlte::page')

@section('title', 'Gestión de Cambio | Crear una Empresa')

@section('content_header')

<div class="card">
    <div class="card-header d-flex justify-content-center">
      <div class="card-title">
        <h4>Crear Empresa</h4>
      </div>
    </div>
</div>

@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form class="needs-validation" action="{{ route('gestionempresa.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationEmpresa">Nombre de la Empresa</label>
                        <input type="text" name="empresa" class="form-control" id="validationEmpresa" placeholder="Nombre" required>
                        <div class="invalid-tooltip">
                            Ingrese el Campo de Nombre.
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationResponsable">Resposable (s)</label>
                        <select class="form-control" type="text" name="user_id" id="validationResponsable" required>
                            <option value="">Responsable...</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Ingrese el Campo de Resposable.
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationTooltipDireccion">Direccion</label>
                        <div class="input-group">
                            <input type="text" name="direccion" class="form-control" id="validationTooltipDireccion" placeholder="Direccion"required>
                            <div class="invalid-tooltip">
                                Ingrese una Direccion.
                            </div>
                            <div class="valid-tooltip">
                                Listo!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationTooltipNumero">No. de Empleados</label>
                        <div class="input-group">
                            <input type="number" name="empleados" class="form-control" id="validationTooltipNumero" placeholder="123..."required>
                            <div class="invalid-tooltip">
                                Ingrese un Numero de Empleados.
                            </div>
                            <div class="valid-tooltip">
                                Listo!
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationPostal">Codigo Postal</label>
                        <select name="d_codigo"class="form-control" id="validationPostal" placeholder="Agregar un Codigo Postal" required>
                            <option value="">Codigo Postal...</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->d_codigo }}">
                                    {{ $estado->d_codigo }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Ingresa tu Codigo Estatal.
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationCiudad">Ciudad</label>
                        <select name="d_ciudad"class="form-control" id="validationCiudad" placeholder="Agregar una Ciudad" required>
                            <option value="">Ciudad...</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->d_ciudad }}">
                                    {{ $estado->d_ciudad }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Ingresa una Ciudad.
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationColonia">Colonia</label>
                        <select name="d_asenta"class="form-control" id="validationColonia" placeholder="Agregar una Colonia" required>
                            <option value="">Colonia...</option>
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->d_asenta }}">
                                    {{ $estado->d_asenta }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Agrege una Colonia
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
                <div class="col form-group">
                    <label for="">Estatus *</label><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="estatus" value="1" checked> Activo
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="estatus" value="0">Inactivo
                        </label>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a href="{{ route('gestionempresa.index') }}" class="btn btn-danger">Volver</a>
        </form>
    </div>
</div>

@stop


