@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Administracion')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/users') }}" class="btn btn" title="Regresar"><i class="fa fa-angle-double-left"></i></a> Etiqueta é Información del Usuario</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración <i class="fa fa-angle-right"></i> Asignaciónes de Etiquetas <i class="fa fa-angle-right"></i> Etiqueta é Información del Usuario </span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
    .header-color{
        background-color: #1989ff;
        color: white;
        width: 20rem;
    }
</style>
<center>
    <div class="container">
        <div class="card-body">
            <div class="header-color card-header">Usuario No. {{ $user->id }}</div>
            <div class="row">
                <div class="col">
                    <div class="card text-center" style="width: 20rem;">
                        <img class="card-img-top" src="../uploads/avatars/{{ $user->avatar }} " alt="Card image cap">
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
