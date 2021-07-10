<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-6">

                    <div class="form-group">
                        <label for="">Nombre:*</label>
                        <input type="text" class="form-control" wire:model="nombre">

                        @error('nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:*</label>
                        <input type="text" class="form-control" wire:model="descripcion">

                        @error('descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Agregar imagen:*</label>
                        <input type="file" class="form-control" accept="image/*" wire:model="imagen"
                            id="{{ $identificador }}">

                        @error('imagen')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Estatus:*</label>
                        <select class="form-control" wire:model="status">
                            <option value="">Seleccione...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>

                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="imagen, save">Guardar</button>
                        <a href="{{ route('categorias.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
                <div class="col-6">
                    <div wire:loading wire:target="imagen" class="alert alert-info" role="alert">
                        ¡Espera es esta cargando la imagen!
                    </div>
                    @if ($imagen)
                        <img class="col-auto" src="{{ $imagen->temporaryUrl() }}">
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
