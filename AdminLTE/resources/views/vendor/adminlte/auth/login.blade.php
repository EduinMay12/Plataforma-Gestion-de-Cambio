@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('adminlte_css_pre')
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@stop

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif

@section('auth_header', __('Acceder a Gestion de Cambio'))

@section('auth_body')
<div class="card">
    <div class="card-body p-4">
        <div class="text-center mt-2">
            <h5 class="text-primary">Gestion de Cambio !</h5>
            <p class="text-muted">Sign in to continue to Minible.</p>
        </div>
        <div class="p-2 mt-4">
            <form action="{{ $login_url }}" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label class="form-label" for="name">Correo Electronico </label>
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Correo Electronico') }}" autofocus>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="auth-remember-check">
                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                </div>

                <div class="mt-3 text-end">
                    <button class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn btn-primary w-sm waves-effect waves-light') }}" type="submit">{{ __('Entrar') }}</button>
                </div>



                <div class="mt-4 text-center">
                    <div class="signin-other-title">
                        <h5 class="font-size-14 mb-3 title">Sign in with</h5>
                    </div>


                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="javascript:void()"
                                class="social-list-item bg-primary text-white border-primary">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void()"
                                class="social-list-item bg-info text-white border-info">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void()"
                                class="social-list-item bg-danger text-white border-danger">
                                <i class="mdi mdi-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-4 text-center">
                    <p class="mb-0">Don't have an account ? <a href="auth-register"
                            class="fw-medium text-primary"> Signup now </a> </p>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

