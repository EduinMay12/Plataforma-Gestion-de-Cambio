@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Crear Persona')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Crear Persona</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(array('route' => 'users.store','method'=>'POST', 'class'=> 'needs-validation', 'novalidate')) !!}
                        <div class="row">
                            <div class="col-7">
                                <div class="car">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationTooltip01">Nombre (s)</label>
                                                    <input type="text" name="name" class="form-control" id="validationTooltip01" placeholder="Nombre (s)" required>
                                                    <div class="invalid-tooltip">
                                                        Ingrese el Campo de Nombre.
                                                    </div>
                                                    <div class="valid-tooltip">
                                                        Listo!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationTooltip02">Apellido (s)</label>
                                                    <input type="text" name="apellido" class="form-control" id="validationTooltip02" placeholder="Apellido (s)" required>
                                                    <div class="invalid-tooltip">
                                                        Ingrese el Campo de Apellido.
                                                    </div>
                                                    <div class="valid-tooltip">
                                                        Listo!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationTooltipUsername">Correo Electrónico</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                        </div>
                                                        <input type="email" name="email" class="form-control" id="validationTooltipUsername" placeholder="Correo Electrónico" aria-describedby="validationTooltipUsernamePrepend" required>
                                                        <div class="invalid-tooltip">
                                                            Ingrese un Correo Electronico.
                                                        </div>
                                                        <div class="valid-tooltip">
                                                            Listo!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="car">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationPostal">Empresa</label>
                                                    <select name="empresa"class="form-control" id="validationPostal" required>
                                                        <option value="">Seleccionar</option>
                                                        @foreach ($empresa as $empresas)
                                                            <option value="{{ $empresas->empresa }}">
                                                                {{ $empresas->empresa }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Ingresa tu Colonia
                                                    </div>
                                                    <div class="valid-tooltip">
                                                        Listo!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 position-relative">
                                                    <label class="form-label" for="validationPostal">Sucursal</label>
                                                    <select name="sucursal"class="form-control" id="validationPostal" required>
                                                        <option value="">Seleccionar</option>
                                                        @foreach ($sucursales as $sucursales)
                                                            <option value="{{ $sucursales->sucursal }}">
                                                                {{ $sucursales->sucursal }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-tooltip">
                                                        Ingresa tu Colonia
                                                    </div>
                                                    <div class="valid-tooltip">
                                                        Listo!
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationTooltip03">Contraseña</label>
                                    <input type="password" name="password" class="form-control" id="validationTooltip03" placeholder="***" required>
                                    <div class="invalid-tooltip">
                                        Ingrese una Contraseña.
                                    </div>
                                    <div class="valid-tooltip">
                                        Listo!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationTooltip04">Confirmación de la Contraseña</label>
                                    <input type="password" name="confirm-password" class="form-control" id="validationTooltip04" placeholder="***" required>
                                    <div class="invalid-tooltip">
                                        Confirme la Contraseña.
                                    </div>
                                    <div class="valid-tooltip">
                                        Listo!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationTooltip05">Tipo* :</label>
                                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','option', 'id'=>'validationTooltip05','required')) !!}
                                    <div class="invalid-tooltip">
                                        Agrege una Etiqueta al Usuario.
                                    </div>
                                    <div class="valid-tooltip">
                                        Listo!
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationTooltip02">Direccion</label>
                                    <input type="text" name="direccion" class="form-control" id="validationTooltip02" placeholder="Direccion" required>
                                    <div class="invalid-tooltip">
                                        Ingrese una Direccion.
                                    </div>
                                    <div class="valid-tooltip">
                                        Listo!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationPostal">Ciudad</label>
                                    <select name="d_ciudad"class="form-control" id="validationPostal" required>
                                        <option value="">Seleccionar</option>
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->d_ciudad }}">
                                                {{ $estado->d_ciudad }}
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
                            <div class="col-md-4">
                                <div class="mb-3 position-relative">
                                    <label class="form-label" for="validationPostal">Colonia</label>
                                    <select name="d_asenta"class="form-control" id="validationPostal" required>
                                        <option value="">Seleccionar</option>
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->d_asenta }}">
                                                {{ $estado->d_asenta }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-tooltip">
                                        Ingresa tu Colonia
                                    </div>
                                    <div class="valid-tooltip">
                                        Listo!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col form-group">
                            <label for="">Estado</label><br>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="estatus" value="2" checked> Evaluado
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="estatus" value="1"> Pendiente
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="estatus" value="0">Necesita Ayuda
                                </label>
                            </div>
                        </div><br>
                    <button class="btn btn-success" oneclick="alert" type="submit">Guardar</button>
                    <a href="{{ route('users.index') }}"class="btn btn-danger">Volver</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
