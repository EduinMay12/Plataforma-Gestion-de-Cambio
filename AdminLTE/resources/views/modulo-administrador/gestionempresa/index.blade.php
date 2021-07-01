@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Gestión de Empresas')

@section('content_header')

<div class="card">
    <div class="card-header">
      <h3 class="card-title"><a href="{{ url('/modulo-administrador/administrador') }}" class="btn btn" title="Regrasar"><i class="fa fa-angle-double-left"></i></a> Gestionar Empresas</h3>
      <div class="card-tools">
        <span class="badge badge-primary"><i class="fa fa-home"></i> Inicio <i class="fa fa-angle-right"></i> Administracion <i class="fa fa-angle-right"></i> Gestionar Empresas</span>
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

    @livewire('modulo-administrador.gestion-empresas.index-empresas')

@endsection

@extends('layouts.footer')
