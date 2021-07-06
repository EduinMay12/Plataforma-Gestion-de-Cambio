<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-6">

                    <div class="form-group">
                        <label for="">Nombre:*</label>
                        <input type="text" class="form-control" wire:model="categoria.nombre">

                        @error('categoria.nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion:*</label>
                        <input type="text" class="form-control" wire:model="categoria.descripcion">

                        @error('categoria.descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Agregar imagen:*</label>
                        <input wire:model="imagen" type="file" class="form-control" accept="image/*" id="{{ $identificador }}">

                        @error('imagen')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Estatus:*</label><br>
                        <select wire:model="categoria.status" class="form-control">
                            <option value="">Seleccione...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>

                        @error('categoria.status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save">Guardar</button>
                        <a href="{{ route('categorias.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
                <div class="col-6">
                    @if ($imagen)
                        <img class="col-auto" src="{{ $imagen->temporaryUrl() }}">
                    @else
                        <img class="col-auto" src="{{ Storage::url($categoria->imagen) }}">
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
