@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Editar Etiqueta')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Editado de Etiqueta</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
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
                <div class="card-body">
                    {!! Form::model($role, ['class'=> 'needs-validation', 'novalidate', 'method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="validationEtiqueta">Nombre de la Etiqueta</label>
                                {!! Form::text('name', null, array('placeholder' => 'Nombres (s)','class' => 'form-control', 'id'=> 'validationEtiqueta', 'required')) !!}
                                <div class="invalid-tooltip">
                                    Ingrese el Campo de Nombre.
                                </div>
                                <div class="valid-tooltip">
                                    Listo!
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Permisos de la Etiqueta :</strong>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name', 'data-off-label'=> 'No', 'data-on-label' => 'Si', 'id' => 'switch3')) }}</label>
                                    {{ $value->name }}
                                <br/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('roles.index') }}"class="btn btn-danger">Volver</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
