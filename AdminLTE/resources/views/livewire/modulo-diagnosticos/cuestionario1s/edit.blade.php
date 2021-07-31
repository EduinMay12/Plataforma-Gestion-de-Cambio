<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-6">

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" wire:model="cuestionario1.nombre">

                        @error('cuestionario1.nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" wire:model="cuestionario1.descripcion">

                        @error('cuestionario1.descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <label for="estatus">Estatus:</label>
                    <select wire:model="cuestionario1.estatus" class="form-control col-md-4">
                        <option value="">Seleccione...</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select>
                    @error('cuestionario1.estatus')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror



                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('cuestionario1s.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
