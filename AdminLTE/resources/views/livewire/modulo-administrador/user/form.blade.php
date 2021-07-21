<div class="row">
    <div class="col-7">
        <div class="car">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Nombre (s)</label>
                            <input type="text" wire:model="name" class="form-control" placeholder="Nombre (s)" required>
                        </div>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Apellido (s)</label>
                            <input type="text" wire:model="apellido" class="form-control" placeholder="Apellido (s)" required>
                        </div>
                        @error('apellido')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Correo Electrónico</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" wire:model="email" class="form-control" placeholder="Correo Electrónico" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="car">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Empresa :</label><br>
                            <span>{{ $empresa->empresa }}</span>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="mb-3 position-relative">
                            <label class="form-label" for="">Sucursal :</label><br>
                            <span>{{ $sucursal->sucursal }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Contraseña</label>
            <input type="password" wire:model="password" class="form-control" placeholder="Nueva Contraseña" required>
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Confirmación de la Contraseña</label>
            <input type="password" wire:model="confirm-password" class="form-control" placeholder="Confirmar Contraseña" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Tipo* :</label>


        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Direccion</label>
            <input type="text" wire:model="direccion" class="form-control" placeholder="Direccion" required>
            @error('direccion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Ciudad</label>
            <select wire:model="d_ciudad"class="form-control" required>
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
    <div class="col-md-4">
        <div class="mb-3 position-relative">
            <label class="form-label" for="">Colonia</label>
            <select wire:model="d_asenta"class="form-control" required>
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
</div>

<div class="col form-group">
    <label for="">Estado</label><br>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio" wire:model="estatus" value="2"> Evaluado
        </label>
        <label class="btn btn-primary">
            <input type="radio" wire:model="estatus" value="1"> Pendiente
        </label>
        <label class="btn btn-primary">
            <input type="radio" wire:model="estatus" value="0">Necesita Ayuda
        </label>
    </div>
    @error('estatus')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
