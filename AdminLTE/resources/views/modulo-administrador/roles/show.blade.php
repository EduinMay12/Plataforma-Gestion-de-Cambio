@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Detalles de la Etiqueta')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
            <div class="card-title">
            <h4>Detalle de Etiqueta y los Permisos</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center card-body"><br>
                    <center>
                        <div class="alert alert-primary" role="alert" style="width: 20rem;">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $role->name }}
                            </div>
                        </div>
                    </center>
                    <div class="alert alert-primary" role="alert">
                        <strong>Permissions:</strong>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <a href="{{ route('roles.index') }}"class="btn btn-danger">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
