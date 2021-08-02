<div class="row">

    <div class="col-4">
        <label for="">Categoria: </label>
        <span>{{ $categoria->nombre}}</span>
    </div>

    <div class="col-4">
        <label for="">Curso: </label>
        <span>{{ $curso->nombre}}</span>
    </div>

    <div class="col-4">
        <label for="">Grupo: </label>
        <span>{{ $grupo->nombre}}</span>
    </div>

</div>

<div class="row mt-2">

    <div class="col-4">
        <label for="">Seleccionar sucursal</label>
        <select class="form-control">
            <option value="">Seleccione...</option>
            @foreach($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->sucursal}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <label for="">Seleccionar perfil</label>
        <select class="form-control">
            <option value="">Seleccione...</option>
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>

</div>