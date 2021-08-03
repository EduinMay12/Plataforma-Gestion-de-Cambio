<div class="col-12">


    <div class="row">
        <div class="col-md-8">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Empresa :</label>
                <span>{{ $empresa->empresa }}</span>
            </div>
        </div>

        <div class="col-md-8">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">Nombre de la Sucursal* :</label>
                <input type="text" wire:model="sucursal" class="form-control" placeholder="Nombre" required>
                @error('sucursal') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">Resposable* (s):</label>
                <select class="form-control" type="text" wire:model="user_id" required>
                    <option value="">Seleccionar</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">Direccion* :</label>
                <input type="text" wire:model="direccion" class="form-control" placeholder="Direccion" required>
                @error('direccion') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">No. de Empleados* :</label>
                <input type="number" wire:model="empleados" class="form-control" placeholder="123..."required>
                @error('empleados') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Codigo Postal* :</label>
                <select wire:model="d_codigo"class="form-control" placeholder="Agregar un Codigo Postal" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_codigo }}">
                            {{ $estado->d_codigo }}
                        </option>
                    @endforeach
                </select>
                @error('d_codigo') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Ciudad* :</label>
                <select wire:model="d_ciudad"class="form-control" placeholder="Agregar una Ciudad" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_ciudad }}">
                            {{ $estado->d_ciudad }}
                        </option>
                    @endforeach
                </select>
                @error('d_ciudad') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Colonia* :</label>
                <select wire:model="d_asenta"class="form-control" placeholder="Agregar una Colonia" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_asenta }}">
                            {{ $estado->d_asenta }}
                        </option>
                    @endforeach
                </select>
                @error('d_asenta') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Estado* :</label>
                <select wire:model="estado"class="form-control" placeholder="Agregar una Colonia" required>
                    <option>Seleccionar</option>
                        <option> Yucatán</option>
                </select>
                @error('estado') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col form-group">
            <div class="col-md-4">
                <div class="md-3 position-relative">
                    <label class="form-group" for="">Tamaño* :</label>
                    <select class="form-control" wire:model="tamaño">
                        <option value="">Seleccionar</option>
                        <option value="2"> Chico </option>
                        <option value="1"> Mediano </option>
                        <option value="0"> Grande </option>
                    </select>
                    @error('tamaño') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <div class="col form-group">
            <div class="col-md-4">
                <div class="md-3 position-relative">
                    <label class="form-group" for="">Estatus* :</label>
                    <select class="form-control" wire:model="estatus">
                        <option value="">Seleccionar</option>
                        <option value="1"> Activo </option>
                        <option value="0"> Inactivo </option>
                    </select>
                    @error('estatus') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button wire:click="store" wire:loading.attr="disabled" wire:target="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $empresa->id }})" class="btn btn-danger">Volver</button>
    </div>

</div>
