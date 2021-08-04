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
        <label for="">Seleccionar sucursal {{$sucursal_id}}</label>
        <select wire:model="sucursal_id" class="form-control">
            <option value="">Seleccione...</option>
            @foreach($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->sucursal}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <label for="">Seleccionar perfil {{$role_id}}</label>
        <select wire:model="role_id" class="form-control">
            <option value="">Seleccione...</option>
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
        </select>
    </div>

    @if($participantes->count())
        @foreach($participantes as $participante)
            <span>{{$participante->name}}</span>
        @endforeach
    @else
        <span>No existen registros</span>
    @endif


</div>