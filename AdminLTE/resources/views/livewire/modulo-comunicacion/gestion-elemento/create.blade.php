<div class="col-12">

    <div class="card-body row">
        <div class="col-6">
            <div class="card mb-3 position-relative">
                <div class="card-body btn btn-secondary"><br>
                    @if ($imagen)
                    <img width="500" height="350" src="{{ $imagen->temporaryUrl() }}" class="card-img-top col-auto" alt="...">
                    @endif
                    <br>
                    <center>
                        <br>
                        <div wire:loading wire:target="imagen" class="alert alert-info" role="alert">
                            ¡Espera es esta cargando la imagen! <i class="fa fa-spinner fa-spin"></i>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-6">
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
            <div class="form-group">
                <label for="">Agregar imagen* :</label>
                <br>
                <input type="file" accept="image/*" wire:model="imagen" id="{{ $identificador }}"><br>
                @error('imagen') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
        </div>

        <div class="col-12">

            <div class="row">
                <div class="col-6">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Nombre* :</label>
                        <input type="text" wire:model="name" class="form-control" placeholder="Nombre" required>
                        @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Resposable* :</label>
                        <select class="form-control" type="text" wire:model="user_id" required>
                            <option value="">Seleccionar</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }} ">
                                    {{ $user->name }} {{ $user->apellido }}
                                </option>
                            @endforeach
                        </select>
                        @error('user_id') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Descripción* :</label>
                        <input rows="8" wire:model="descripcion" class="form-control" placeholder="Descripción" required>
                        @error('descripcion') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Dirigido* a :</label>
                        <input rows="8" wire:model="dirigido" class="form-control" placeholder="Dirigido" required>
                        @error('dirigido') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Contenido* :</label>
                        <input rows="8" wire:model="contenido" class="form-control" placeholder="Contenido" required>
                        @error('contenido') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="mb-3 position-relative">
                        <label class="form-label" for="">Url* :</label>
                        <input rows="8" wire:model="url" class="form-control" placeholder="Url" required>
                        @error('url') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Estatus* :</label>
                        <select class="form-control" wire:model="status">
                            <option value="">Seleccione...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>

                        @error('status') <span class="error badge badge-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="imagen, save">Guardar</button>
            <a href="{{ route('elemento.index') }}" class="btn btn-danger">Volver</a>
        </div>
    </div>

</div>
