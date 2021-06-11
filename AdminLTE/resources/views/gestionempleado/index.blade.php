@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Gestinar Personal</h1>
@stop

@section('content')
<style>
.th-color{
    background-color: blue;
    color: white;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                            <div class="col">
                                <label>Seleccionar Empresa </label>
                                <select name="reporta_a" class="form-control">
                                    <option value="">Bebidas Yucatán</option>
                                    <option>Bepensa</option>
                                    <option>Dunosusa</option>
                                    <option>Berel</option>
                                </select><br>
                            </div>
                            <div class="col">
                                <label>Seleccionar Sucursal </label>
                                <select name="reporta_a" class="form-control">
                                    <option value="">Pacabtun</option>
                                    <option>Merida</option>
                                    <option>Maxcanu</option>
                                    <option>kopoma</option>
                                </select><br>
                            </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary" title="Agregar nuevo Puesto">Crear Persona <i class="fa fa-plus"></i></a>
                    </div>

                    <form method="GET" action="{{ url('/puestos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">

                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
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
                                    <th>Apellido</th>
                                    <th>Empresa/Sucursal</th>
                                    <th>Tipo</th>
                                    <th>Puesto</th>
                                    <th>Guia. 1</th>
                                    <th>Guia. 2</th>
                                    <th>Estado</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

