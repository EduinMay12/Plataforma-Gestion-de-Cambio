@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Listado de Usuarios')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/administrador') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Asignación de Etiquetas </h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Asignaciónes de Etiquetas </span>
      </div>
    </div>
</div>

@stop

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<div class="card">
        <div class="card-body">
            <div class="text-center">
                @can('crear-etiqueta')
                <a href="{{ route('users.create') }}" class="btn btn-primary" title="Agregar nuevo Usuario"><i class="fa fa-plus"></i> Crear un nuevo Usuario</a>
                @endcan
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

