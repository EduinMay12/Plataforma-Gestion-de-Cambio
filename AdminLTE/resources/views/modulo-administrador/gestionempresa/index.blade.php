@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/administrador') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Gestionar Empresas</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Gestionar Empresas</span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
.th-color{
    background-color: #1989ff;
    color: white;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('gestionempresa.create') }}" class="btn btn-primary" title="Agregar nuevo Puesto">Crear Empresa <i class="fa fa-plus"></i></a>
                    </div>
                    <form method="GET" action="{{ url('/gestionempleado') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">

                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="th-color">
                                    <th>No.</th>
                                    <th>Nombre</th>
                                    <th>Resposable</th>
                                    <th>No. Empleados</th>
                                    <th>Estado</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Bebidas Yucatán</td>
                                    <td>Juan Peréz</td>
                                    <td>25</td>
                                    <td>Activo</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    </td>
                                    <td>
                                        <form method="POST" action="" accept-charset="UTF-8" style="display:inline">

                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot; Confirmar para Eliminar?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@stop

@extends('layouts.footer')
