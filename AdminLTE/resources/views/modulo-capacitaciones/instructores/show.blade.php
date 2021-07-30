@extends('adminlte::page')

@section('title', 'Ver Instructor')

@section('content_header')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-center">
                <div class="card-title">Ver Instructor</div>
            </div>
        </div>
    </div>

@stop

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <label for="">Nombre: </label>
                <span>{{ $instructore->user->name }}</span><br>
                <label for="">Estatus: </label>
                @if ( $instructore->status == 0 )
                    <span>Inactivo</span><br>
                @elseif( $instructore->status == 1)
                    <span>Activo</span><br>
                @endif
                <label for="">Reseña:</label>
                <span>{{ $instructore->resena }}</span>
                <div class="mt-4">
                    <a href="{{ route('instructores.index') }}" class="btn btn-danger">
                        Vover
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection