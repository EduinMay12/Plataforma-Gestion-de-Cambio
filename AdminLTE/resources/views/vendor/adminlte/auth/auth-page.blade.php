@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')

<body style="background: linear-gradient(to right, #c7c8f0, #a6a7ff);">
    <div class="{{ $auth_type ?? 'login' }}">
        <div class="account-pages my-5 pt-sm-5 {{ config('adminlte.classes_auth_card') }}">
            <div class="container {{ $auth_type ?? 'login' }} justify-content-center {{ config('adminlte.classes_auth_body', '') }}">
                <div class="col-12">
                    @yield('auth_body')
                </div>
            </div>
        </div>
    </div>
</body>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
