@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/roles') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Crear una Nueva Etiqueta de Administración</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Panel de Etiquetas <i class="fa fa-angle-right"></i> Crear una Nueva Etiqueta de Administración</span>
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
                <div class="datos card-header">Agregar Nueva Etiqueta</div>
                <div class="card-body">
                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nombre de la Etiqueta* :</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Nombre de la Etiqueta','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permisos* :</strong>
                                <br/>
                                @foreach($permission as $permission)
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" class="custom-control-input" id="permission_{!! $permission->id !!}" value="{!! $permission->id !!}" name="permission[]" @if(is_array(old('permission')) && in_array("$permission->id",old('permission'))) checked @elseif(is_array($permission) && in_array("$permission->id",$permission_role)) checked @endif>
                                        <label class="custom-control-label" for="permission_{!! $permission->id !!}">
                                            {{ $permission->name }}
                                            <em>({{ $permission->description }})</em>
                                        </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
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
