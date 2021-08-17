<div class="row">

    <div class="col-4">
        <label for="">Categoria: </label>
        <span>{{ $categoria->nombre }}</span>
    </div>

    <div class="col-4">
        <label for="">Curso: </label>
        <span>{{ $curso->nombre }}</span>
    </div>

    <div class="col-4">
        <label for="">Grupo: </label>
        <span>{{ $grupo->nombre }}</span>
    </div>

</div>

<div class="row mt-2">

    <div class="col-4">
        <label for="">Seleccionar sucursal</label>
        <select wire:model="sucursalId" class="form-control">
            <option value="">Seleccione...</option>
            @foreach ($sucursales as $sucursal)
                <option value="{{ $sucursal->id }}">{{ $sucursal->sucursal }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <label for="">Seleccionar perfil</label>
        <select wire:model="roleId" class="form-control">
            <option value="">Seleccione...</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>

</div>

<div class="row">

    <div class="col-5 mt-4">

        @if ($participantes->count())
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <input type="checkbox" wire:model="selectAll" aria-label="Checkbox for following text input">
                    </div>
                </div>
                <input type="text" value="Seleccionar todos" class="form-control" aria-label="Text input with checkbox"
                    disabled>
            </div>

            @foreach ($participantes as $participante)
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" value="{{ $participante->id }}" wire:model="usersId"
                                id="{{ $participante->id }}" aria-label="Checkbox for following text input">
                        </div>
                    </div>
                    <input type="text" value="{{ $participante->name }}" class="form-control"
                        aria-label="Text input with checkbox" disabled>
                </div>
            @endforeach
            
            @foreach($usersId as $userId)
                <span>{{$userId}}</span>
            @endforeach
            
        @else
            <span>No existen registros</span>
        @endif

    </div>

</div>
