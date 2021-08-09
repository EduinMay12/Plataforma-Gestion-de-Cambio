<div class="col-12">
    <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 position-relative">
                        <label class="form-group" for="">Nombre* (s):</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="Nombre (s)" required>
                        @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 position-relative">
                        <label class="form-group" for="">Apellido* (s):</label>
                        <input type="text" wire:model="apellido" class="form-control" placeholder="Apellido (s)" required>
                        @error('apellido') <span class="terror badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3 position-relative">
                        <div class="form-group">
                            <label>Correo Electronico* :</label>
                            <input type="text" wire:model="email" placeholder="ejemplo@ejemplo.com" class="form-control">
                            @error('email') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-body btn btn-secondary">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="">Empresa :</label><br>
                                <span >{{ $empresa->empresa }}</span>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="">Sucursal :</label><br>
                                <span>{{ $sucursal->sucursal }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="">Puesto Actual* :</label>
                                <select wire:model="puesto_actual_id" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($puestos as $puesto)
                                        <option value="{{ $puesto->nombre }}">
                                            {{ $puesto->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('puesto_actual_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="">Puesto Futuro* :</label>
                                <select wire:model="puesto_futuro_id" class="form-control" required>
                                    <option value="">Seleccione...</option>
                                    @foreach ($puestos as $puesto)
                                        <option value="{{ $puesto->nombre }}">
                                            {{ $puesto->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('puesto_futuro_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3 position-relative">
                <div class="form-group">
                    <label>Contraseña* :</label>
                    <input type="password" wire:model="password" placeholder="Contraseña" class="form-control">
                    @error('password') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3 position-relative">
                <label class="form-label" for="">Tipo* :</label>
                <select wire:model="tipo" class="form-control" required>
                    <option value="">Seleccione...</option>
                    @foreach ($roldiagnosticos as $roldiagnostico)
                        <option value="{{ $roldiagnostico->nombre }}">
                            {{ $roldiagnostico->nombre }}
                        </option>
                    @endforeach
                </select>
                @error('tipo') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">Direccion* :</label>
                <input type="text" wire:model="direccion" class="form-control" placeholder="Direccion" required>
                @error('direccion') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3 position-relative">
                <label class="form-group" for="">Ciudad* :</label>
                <select wire:model="d_ciudad" class="form-control" required>
                    <option value="">Seleccione...</option>
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
                <label class="form-group" for="">Colonia* :</label>
                <select wire:model="d_asenta"class="form-control" required>
                    <option value="">Seleccione...</option>
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
            <div class="md-3 position-relative">
                <label class="form-group" for="">Estatus* :</label>
                <select class="form-control" wire:model="estatus">
                    <option value="">Seleccione...</option>
                    <option value="2"> Evaluado </option>
                    <option value="1">Pendiente</option>
                    <option value="0">Necesita Ayuda</option>
                </select>
                @error('estatus') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>
    </div><br>
    <div class="col-12">
        <button wire:click.prevent="store" wire:loading.attr="disabled" class="btn btn-success">Guardar</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">Volver</a>
    </div>

</div>
