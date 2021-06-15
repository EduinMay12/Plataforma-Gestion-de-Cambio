@extends('adminlte::page')

@section('title', 'Gestion de Cambio| Administracion')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/home') }}" class="btn btn" title="Regrasar"><i class="fa fa-home"></i></a> Administración</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i>  Inicio <i class="fa fa-angle-right"></i> Administración </span>
      </div>
    </div>
</div>

@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
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
