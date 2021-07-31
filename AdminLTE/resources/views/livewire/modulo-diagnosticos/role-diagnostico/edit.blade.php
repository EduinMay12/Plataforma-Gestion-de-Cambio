<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-12">

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="">Nombre:</label>
                                <input class="form-control" wire:model="roldiagnostico.nombre">
    
                                @error('roldiagnostico.nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="">Descripción:</label>
                                <input class="form-control" wire:model="roldiagnostico.descripcion">
    
                                @error('roldiagnostico.descripcion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <label for="estatus">Estatus:</label>
                        <select wire:model="roldiagnostico.estatus" class="form-control col-md-4">
                            <option value="">Seleccione...</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                        @error('roldiagnostico.estatus')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <div class="mt-4">
                            <button class="btn btn-success" wire:click="save">Guardar</button>
                            <a href="{{ route('roldiagnosticos.index') }}" class="btn btn-danger">Volver</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
