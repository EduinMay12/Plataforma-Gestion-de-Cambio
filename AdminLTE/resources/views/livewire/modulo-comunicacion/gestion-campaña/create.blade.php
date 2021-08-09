<div class="col-12">

        <div class="col-12">

            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Nombre* :</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="Nombre" required>
                        @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Seleccionar Empresa *</label>
                        <select class="form-control" type="text" wire:model="empresa_id" required>
                            <option value="">Seleccione...</option>
                            @foreach ($empresas as $empresa)
                                <option value="{{ $empresa->id }}">
                                    {{ $empresa->empresa }}
                                </option>
                            @endforeach
                        </select>
                        @error('empresa_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Seleccionar Sucursal *</label>
                        <select class="form-control" type="text" wire:model="sucursal_id" required>
                            <option value="">Seleccione...</option>
                            @foreach ($sucursales as $sucursal)
                                <option value="{{ $sucursal->id }}">
                                    {{ $sucursal->sucursal }}
                                </option>
                            @endforeach
                        </select>
                        @error('sucursal_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Resposable* :</label>
                        <select class="form-control" type="text" wire:model="user_id" required>
                            <option value="">Seleccione...</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }} ">
                                    {{ $user->name }} {{ $user->apellido }} /
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $role)
                                        <span>{{ $role }}</span>
                                    @endforeach
                                @endif
                                </option>
                            @endforeach
                        </select>
                        @error('user_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-4">
                    <div class="form-group">
                        <label for="">Fecha de Inicio* :</label>
                            <input wire:model="fechainicio" type="datetime" class="form-control">
                        @error('contenido') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="">Fecha Final* :</label>
                        <input wire:model="fechafin" type="date" class="form-control">
                        @error('url') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="">Estatus* :</label>
                        <select class="form-control" wire:model="status">
                            <option value="">Seleccionar</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>

                        @error('status') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Categoria* :</label>
                        <select class="form-control" type="text" wire:model="comunicacion_id" required>
                            <option value="">Seleccionar</option>
                            @foreach ($comunicacion as $comunicacion)
                                <option value="{{ $comunicacion->id }}">
                                    {{ $comunicacion->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('comunicacion_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Categoria* :</label>
                        <select class="form-control" type="text" wire:model="comunicacion_id" required>
                            <option value="">Seleccionar</option>
                            @foreach ($elementos as $elemento)
                                <option value="{{ $elemento->id }}">
                                    {{ $elemento->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('comunicacion_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div>
                <button class="btn btn-primary" wire:click="save" wire:loading.attr="disabled" wire:target="imagen, save">Agregar</button>
            </div><br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Categoria de la Comunicación</th>
                            <th scope="col">Elemento de la Comunicación</th>
                            <th scope="col">Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td scope="row"></td>
                            <td scope="row"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="mt-4">
            <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="imagen, save">Guardar</button>
            <a href="{{ route('campaña.index') }}" class="btn btn-danger">Volver</a>
        </div>

    </div>
</div>
