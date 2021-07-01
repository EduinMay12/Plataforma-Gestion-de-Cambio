@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/roles') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left""></i></a> Editado de Etiqueta</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Panel de Etiquetas <i class="fa fa-angle-right"></i> Editado de Etiquetas </span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
    .header-color{
        background-color: #1989ff;
        color: white;
    }
</style>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header-color card-header">Editado de la Etiqueta</div>
                <div class="card-body">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre :</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permisos de la Etiqueta :</strong>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                                <br/>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Guardar Cambio</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
