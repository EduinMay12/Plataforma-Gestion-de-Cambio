@extends('adminlte::page')

@section('title', 'Gestion de Cambio | Crear una Nueva Etiqueta')

@section('content_header')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-center">
        <div class="card-title">
            <h4>Crear un nuevo ROL</h4>
        </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Nombre del Rol* :</label>
                            <input type="text" name="name" class="form-control" " placeholder="Nombre">
                            @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Color* :</label>
                            <input type="color" name="color" id="input-theme" class="form-control" required>
                            @error('color') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Descripción* :</label>
                            <textarea type="text" name="description" class="form-control" " placeholder="Agrega una descripcion"></textarea>
                            @error('description') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                         <a href="{{ route('roles.index') }}"class="btn btn-danger">Volver</a>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="table-responsive mb-6"><br>
                                <table class="table table-bordered table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                                    <thead>
                                        <tr class="table-primary">
                                            <th scope="col"> Permisos
                                                <br/>@error('permission') <span class="error badge badge-danger">{{ $message }}</span>@enderror <br>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">
                                                @foreach($permission as $permission)
                                                <input type="checkbox" switch="bool" id="switch3{!! $permission->id !!}" value="{!! $permission->id !!}" name="permission[]" @if(is_array(old('permission')) && in_array("$permission->id",old('permission'))) checked @elseif(is_array($permission) && in_array("$permission->id",$permission_role)) checked @endif>
                                                    <label data-on-label="Si" data-off-label="No" for="switch3{!! $permission->id !!}"></label>
                                                    {{ $permission->name }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection

