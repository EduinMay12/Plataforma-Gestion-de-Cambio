@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Detallles del Entiquetado')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Rol é Información del Empleado</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
<center>
    <div class="container">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="/uploads/avatars/{{ $user->avatar }} " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text-center">
                            {{ $user->name }} {{ $user->apellido }}
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </h5>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="text">Correo Electronico : {{ $user->email }}</p>
                            <p class="text">Direccion : {{ $user->direccion }}</p>
                            <p class="text">Empresa : {{ $user->empresa_id }}</p>
                            <p class="text">Sucursal : {{ $user->sucursal_id }}</p>
                            <p class="text">Tipo : {{ $user->tipo }}</p>
                            <p class="text">Puesto Actual : {{ $user->puesto_actual_id }}</p>
                            <p class="text">Puesto Futuro : {{ $user->puesto_futuro_id }}</p>
                            <p class="text">Ciudad : {{ $user->d_ciudad }}</p>
                            <p class="text">Colonia : {{ $user->d_asenta }}</p>
                                @if ($user->estatus == 0)
                                <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                                    @elseif($user->estatus == 1)
                                <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                                    @elseif($user->estatus == 2)
                                <span><center><span class="badge badge-pill badge-info"> Evaluado </span></center></span>
                                    @elseif($user->estatus == 3)
                                <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Volver</a>
        </div>
    </div>
</center>
@endsection

