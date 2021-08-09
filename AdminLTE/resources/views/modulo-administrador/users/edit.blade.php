@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Editar Etiqueta')

@section('content_header')
<div class="container">
    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <span>Editar Empleado</span>

        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> Escoge un Rol.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
<div class="content">
    <div class="container">
       <div class="card">
        <div class="card-body">
            <div class="col-12">
                <div class="row">
                    <div class="col-7">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 position-relative">
                                    <label class="form-group" for="">Nombre* (s):</label>
                                    {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                                    @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 position-relative">
                                    <label class="form-group" for="">Apellido* (s):</label>
                                    {!! Form::text('apellido', null, array('placeholder' => 'Apellido','class' => 'form-control')) !!}
                                    @error('apellido') <span class="terror badge badge-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 position-relative">
                                    <div class="form-group">
                                        <label>Correo Electronico* :</label>
                                        {!! Form::text('email', null, array('placeholder' => 'Correo Electronico','class' => 'form-control')) !!}
                                        @error('email') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body btn btn-secondary">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="">Empresa :</label><br>
                                            <span>{{ $user->empresa_id }}</span>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="">Sucursal :</label><br>
                                            <span>{{ $user->sucursal_id }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="">Puesto Actual* :</label>
                                            <select wire:model="puesto_actual_id" class="form-control" >
                                                <option value="">Seleccione...</option>
                                                @
                                            </select>
                                            @error('puesto_actual_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="">Puesto Futuro* :</label>
                                            <select wire:model="puesto_futuro_id" class="form-control" >
                                                <option value="">Seleccione...</option>

                                            </select>
                                            @error('puesto_futuro_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <div class="form-group">
                                <label>Contraseña* :</label>
                                {!! Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control')) !!}
                                @error('password') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Tipo* :</label>
                            <select wire:model="tipo" class="form-control" >
                                <option value="">Seleccione...</option>

                            </select>
                            @error('tipo') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mb-3 position-relative">
                            <div class="form-group">
                                <label>Confirmar Contraseña* :</label>
                                {!! Form::password('confirm-password', array('placeholder' => 'Confirmar Contraseña','class' => 'form-control')) !!}
                                @error('password') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 position-relative">
                            <label class="form-group" for="">Direccion* :</label>
                            {!! Form::text('direccion', null, array('placeholder' => 'Direccion','class' => 'form-control')) !!}
                            @error('direccion') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 position-relative">
                            <label class="form-group" for="">Ciudad* :</label>
                            <select wire:model="d_ciudad" class="form-control" >
                                <option value="">Seleccione...</option>

                            </select>
                            @error('d_ciudad') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 position-relative">
                            <label class="form-group" for="">Colonia* :</label>
                            <select wire:model="d_asenta"class="form-control" >
                                <option value="">Seleccione...</option>

                            </select>
                            @error('d_asenta') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="md-3 position-relative">
                            <label class="form-group" for="">Estatus* :</label>
                            <select class="form-control" wire:model="estatus">
                                <option value="">Seleccione...</option>
                                <option value="2"> Evaluado </option>
                                <option value="1">Pendiente</option>
                                <option value="0">Necesita Ayuda</option>
                            </select>
                            @error('estatus') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role :</strong>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{ route('users.index') }}"class="btn btn-danger">Volver</a>
            </div>
            {!! Form::close() !!}
        </div>
       </div>
    </div>
</div>
@endsection

