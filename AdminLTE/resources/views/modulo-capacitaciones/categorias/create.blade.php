@extends('adminlte::page')

@section('title', 'crear categoria')

@section('content_header')
    <h1>Crear categoria</h1>
@stop

@section('content')
    <div class="col-8">
        <form action="">
            <x-adminlte-input name="iUser" label="User" placeholder="username" label-class="text-lightblue">
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-textarea name="taDesc" label="Description" rows=5 label-class="text-warning" igroup-size="sm"
                placeholder="Insert description...">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lg fa-file-alt text-warning"></i>
                    </div>
                </x-slot>
            </x-adminlte-textarea>
        
        </form>
    </div>

@endsection
