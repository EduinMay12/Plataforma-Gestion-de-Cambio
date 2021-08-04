<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-6">

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" wire:model="cuestionario3.nombre">

                        @error('cuestionario3.nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" wire:model="cuestionario3.descripcion">

                        @error('cuestionario3.descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <label for="estatus">Estatus:</label>
                    <select wire:model="cuestionario3.estatus" class="form-control col-md-4">
                        <option value="">Seleccione...</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    @error('cuestionario3.estatus')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror



                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('cuestionario3s.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
