@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Editar Etiqueta')

@section('content_header')
<div class="container">
    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <span>Empresa : {!! Form::text('empresa_id', null) !!}</span>
            <span>Sucursal : {!! Form::text('sucursal_id', null) !!}</span>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
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

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre :</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                        <strong>Apellido :</strong>
                        {!! Form::text('apellido', null, array('placeholder' => 'Apellido','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Correo Electronico:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Correo Electronico','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <stron>Contraseña :</strong>
                        {!! Form::password('password', array('placeholder' => 'Contraseña','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirmar Contraseña :</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirmar Contraseña','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipo :</strong>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('users.index') }}"class="btn btn-danger">Volver</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
       </div>
    </div>
</div>
@endsection

