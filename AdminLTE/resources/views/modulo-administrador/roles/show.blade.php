@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/roles') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Detalle de Etiqueta y los Permisos</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Panel de Etiquetas <i class="fa fa-angle-right"></i> Detalle de Etiqueta y los Permisos </span>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header-color card-header">Detalle de la Etiqueta</div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
