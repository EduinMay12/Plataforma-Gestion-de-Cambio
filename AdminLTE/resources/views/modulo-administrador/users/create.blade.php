@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Crear y Asignar una Etiqueta')

@section('content_header')
<div class="card">
    <div class="card-header d-flex justify-content-center">
      <div class="card-title">
        <h4>Crear y Asignar una Etiqueta</h4>
      </div>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(array('route' => 'users.store','method'=>'POST', 'class'=> 'needs-validation', 'novalidate')) !!}
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
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
                <div class="col-md-12">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="validationTooltip05">Etiqueta* :</label>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple', 'id'=>'validationTooltip05','required')) !!}
                        <div class="invalid-tooltip">
                            Agrege una Etiqueta al Usuario.
                        </div>
                        <div class="valid-tooltip">
                            Listo!
                        </div>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a href="{{ route('users.index') }}"class="btn btn-danger">Volver</a>
        {!! Form::close() !!}
    </div>
</div>
@endsection
