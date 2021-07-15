@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Detallles del Entiquetado')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Etiqueta é Información del Usuario</h4>
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
                    <div class="card text-center" style="width: 20rem;">
                        <img class="card-img-top" src="/uploads/avatars/{{ $user->avatar }} " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="text-center">
                            {{ $user->name }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </h5>
                            <p class="card-text">Correo Electronico : {{ $user->email }}</p>
                            <p class="card-text">Fecha de Nacimiento : {{ $user->fecha_nacimiento }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection

