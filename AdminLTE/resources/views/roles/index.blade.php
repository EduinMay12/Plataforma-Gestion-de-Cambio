@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/administrador') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Panel de Etiquetas</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Panel de Etiquetas </span>
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
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header-color card-header">Listado de la Etiqueta</div>
                <div class="card-body">
                    <div class="text-center">
                        @can('crear-etiqueta')
                        <a href="{{ route('roles.create') }}" class="btn btn-primary" title="Agregar nuevo Puesto">Crear una nueva etiqueta <i class="fa fa-plus"></i></a>
                        @endcan
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
                                    <th width="50">No.</th>
                                    <th>Nombre de la Etiqueta</th>
                                    @can('ver-etiqueta')
                                    <th width="80p">Ver</th>
                                    @endcan
                                    @can('editar-etiqueta')
                                    <th width="80p">Editar</th>
                                    @endcan
                                    @can('eliminar-etiqueta')
                                    <th width="80p">Borrar</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                        @can('ver-etiqueta')
                                    <td><a class="btn btn-primary" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        @endcan
                                        @can('editar-etiqueta')
                                    <td><a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                        @endcan
                                        @can('eliminar-etiqueta')
                                    <td><form method="POST" action="{{ route('roles.destroy', $role) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm(&quot;Confirmar Para Eliminar &quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $roles->render() !!}
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © EDUMATICS
            </div>

        </div>
    </div>
</footer>
@endsection
