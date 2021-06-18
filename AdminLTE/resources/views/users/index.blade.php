@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/administrador') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Asignación de Etiquetas </h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Asignaciónes de Etiquetas </span>
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
                <div class="header-color card-header">Listado de Usuarios con Etiqueta</div>
                <div class="card-body">
                    <div class="text-center">
                        @can('crear-usuarios')
                        <a href="{{ route('users.create') }}" class="btn btn-primary" title="Asignar una etiquetas a un usuario">Asignar una etiquetas a un usuario <i class="fa fa-plus"></i></a>
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
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Correo Electronico</th>
                                    @can('ver-usuarios')
                                    <th>Ver</th>
                                    @endcan
                                    @can('editar-usuarios')
                                    <th>Editar</th>
                                    @endcan
                                    @can('eliminar-usuarios')
                                    <th>Eliminar</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td width="50">{{ ++$i }}</td>
                                    <td width="50"><img src="../uploads/avatars/{{ $user->avatar }}" width="40" height="40" class="rounded-circle"></td>
                                    <td>{{ $user->name }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}
                                    @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                        <span class="badge badge-success">{{ $v }}</span>
                                        @endforeach
                                    @endif
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    @can('ver-usuarios')
                                    <td width="50"><a class="btn btn-primary" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    @endcan
                                    @can('editar-usuarios')
                                    <td width="50"><a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                    @endcan
                                    @can('eliminar-usuarios')
                                    <td width="50">
                                        <form method="POST" action="{{ route('users.destroy', $user) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="text-center btn btn-danger" onclick="return confirm(&quot;Confirmar Para Eliminar &quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                    @endcan
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
{!! $data->render() !!}
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



