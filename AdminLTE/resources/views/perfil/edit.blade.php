@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/home') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a>Perfil</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Perfil Personal</span>
      </div>
    </div>
</div>

@stop

@section('content')
<style>
    .Personalizar{
        background-color: #1989ff;
        color: white;
    }
    .Seguridad{
        background-color: #1989ff;
        color: white;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="Personalizar card-header">Personalizar</div>
                <div class="card-body">
                    <br>
                    <div class="text-center">
                        <form enctype="multipart/form-data" action="./edit" method="POST">
                            <img src="../uploads/avatars/{{ auth()->user()->avatar }}" width="300" height="300" class="rounded-circle"><br><br>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-primary">
                        </form>
                    </div>
                    <br>
                    <form method="post" action="{{ route('perfil.update') }}" autocomplete="off">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col {{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-name">{{ __('Nombre de la Persona*') }}</label>
                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-email">{{ __('Correo Electronico*') }}</label>
                                <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"">{{ __('Guardar') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="Seguridad card-header">Seguridad</div>
                <div class="card-body">
                    <form method="post" action="{{ route('perfil.password') }}" autocomplete="off">
                        @csrf
                        @method('put')

                        <h6 class="heading-small text-muted mb-4">{{ __('Contraseña') }}</h6>

                        @if (session('password_status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('password_status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">

                            <div class="col{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-current-password">{{ __('Antigua Contraseña:') }}</label>
                                <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>

                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="input-password">{{ __('Nueva Contraseña:') }}</label>
                                <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('*****') }}" value="" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Nueva Contraseña:') }}</label>
                                <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('*****') }}" value="" required>
                            </div>
                        </div><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">{{ __('Cambiar Contraseña') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
