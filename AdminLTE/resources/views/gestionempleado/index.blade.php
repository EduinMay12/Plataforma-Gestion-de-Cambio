@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/administrador') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Gestionar Personal</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Gestionar Personal</span>
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
                        <a href="{{ url('/gestionempleado/create') }}" class="btn btn-primary" title="Agregar nuevo Puesto">Crear Persona <i class="fa fa-plus"></i></a>
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
                                    <th>Foto</th>
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
                                    <td>1</td>
                                    <td><img src="https://picsum.photos/300/300" width="30" height="30" class="rounded-circle"></td>
                                    <td>Juan Pablo</td>
                                    <td>Castro Lora</td>
                                    <td>Corporativo</td>
                                    <td></td>
                                    <td></td>
                                    <td>Por iniciar</td>
                                    <td>Por iniciar</td>
                                    <td>Pendiente</td>
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
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © EDUMATICS
            </div>

        </div>
    </div>
</footer>
@stop


