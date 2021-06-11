@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('Registro del Gestion de Cambio'))

@section('auth_body')
    <form action="{{ $register_url }}" method="post">
        {{ csrf_field() }}

        {{-- Nombre --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                   value="{{ old('name') }}" placeholder="{{ __('Nombre y Apellido') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </div>

        {{-- Apellido Paterno --}}
        <div class="input-group mb-3">
            <input type="text" name="apellido_paterno" class="form-control {{ $errors->has('apellido_paterno') ? 'is-invalid' : '' }}"
                   value="{{ old('apellido_paterno') }}" placeholder="{{ __('Apellido Paterno') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">

                </div>
            </div>
            @if($errors->has('apellido_paterno'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('apellido_paterno') }}</strong>
                </div>
            @endif
        </div>

        {{-- Apellido Materno --}}
        <div class="input-group mb-3">
            <input type="text" name="apellido_materno" class="form-control {{ $errors->has('apellido_materno') ? 'is-invalid' : '' }}"
                   value="{{ old('apellido_materno') }}" placeholder="{{ __('Apellido Materno') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">

                </div>
            </div>
            @if($errors->has('apellido_materno'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('apellido_materno') }}</strong>
                </div>
            @endif
        </div>

        {{-- Fecha de Nacimiento --}}
        <div class="input-group mb-3">
            <input type="input-group date" name="fecha_nacimiento" class="form-control {{ $errors->has('fecha_nacimiento') ? 'is-invalid' : '' }}"
                   value="{{ old('fecha_nacimiento') }}" placeholder="{{ __('Fecha de Nacimiento') }}" autofocus>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-calendar {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('fecha_nacimiento'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                </div>
            @endif
        </div>

        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                   value="{{ old('email') }}" placeholder="{{ __('Correo Electronico') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
        </div>

        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password"
                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('Contraseña') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </div>
            @endif
        </div>

        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                   class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                   placeholder="{{ __('Confirmar la Contraseña') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
            @if($errors->has('password_confirmation'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
            @endif
        </div>

        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('Registrar') }}
        </button>

    </form>
@stop

@section('auth_footer')
    <p class="my-0">
        <a href="{{ $login_url }}">
            {{ __('¿eres ususario?') }}
        </a>
    </p>
@stop
