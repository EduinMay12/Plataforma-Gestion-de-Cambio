
    <div class="row">
        <div class="col-md-8">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Empresa :</label>
                <span>{{ $empresa->empresa }}</span>
            </div>
        </div>

        <div class="col-md-8">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Nombre de la Sucursal *</label>
                <input type="text" wire:model="sucursal" class="form-control" placeholder="Nombre" required>
                @error('sucursal')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Resposable (s)*</label>
                <select class="form-control" type="text" wire:model="user_id" required>
                    <option value="">Seleccionar</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                @error('user_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-8">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Direccion *</label>
                <div class="input-group">
                    <input type="text" wire:model="direccion" class="form-control" placeholder="Direccion" required>
                    <br>
                    @error('direccion')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">No. de Empleados *</label>
                <div class="input-group">
                    <input type="number" wire:model="empleados" class="form-control" placeholder="123..."required>
                    <br>
                    @error('empleados')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Codigo Postal *</label>
                <select wire:model="d_codigo"class="form-control" placeholder="Agregar un Codigo Postal" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_codigo }}">
                            {{ $estado->d_codigo }}
                        </option>
                    @endforeach
                </select>
                @error('d_codigo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Ciudad *</label>
                <select wire:model="d_ciudad"class="form-control" placeholder="Agregar una Ciudad" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_ciudad }}">
                            {{ $estado->d_ciudad }}
                        </option>
                    @endforeach
                </select>
                @error('d_ciudad')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Colonia *</label>
                <select wire:model="d_asenta"class="form-control" placeholder="Agregar una Colonia" required>
                    <option value="">Seleccionar</option>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->d_asenta }}">
                            {{ $estado->d_asenta }}
                        </option>
                    @endforeach
                </select>
                @error('d_asenta')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Estado *</label>
                <select wire:model="estado"class="form-control" placeholder="Agregar una Colonia" required>
                    <option>Seleccionar</option>
                        <option> Yucatán</option>
                </select>
                @error('estado')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="col form-group">
            <label for="">Tamaño *</label><br>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" wire:model="tamaño" value="2">Chico
                </label>
                <label class="btn btn-primary">
                    <input type="radio" wire:model="tamaño" value="1">Mediano
                </label>
                <label class="btn btn-primary">
                    <input type="radio" wire:model="tamaño" value="0">Grande
                </label>
            </div>
        </div>

        <div class="col form-group">
            <label for="">Estatus *</label><br>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                    <input type="radio" wire:model="estatus" value="1"> Activo
                </label>
                <label class="btn btn-primary">
                    <input type="radio" wire:model="estatus" value="0">Inactivo
                </label>
            </div>
        </div>

    </div>

