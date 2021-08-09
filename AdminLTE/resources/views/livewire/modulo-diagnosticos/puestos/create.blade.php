<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-12">

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="">Nombre:</label>
                                <input class="form-control" wire:model="nombre">
    
                                @error('nombre')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label for="">Descripción:</label>
                                <input class="form-control" wire:model="descripcion">
    
                                @error('descripcion')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <label for="reporta_a">Puesto a quien reporta:</label>
                        <select wire:model="reporta_a" class="form-control col-md-4">
                            <option wire:model="reporta_a">Por defecto este campo es nulo</option>
                            @foreach($puestos as $item)
                            <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                            @endforeach
                        </select>

                        <label for="estatus">Estatus:</label>
                        <select wire:model="estatus" class="form-control col-md-4">
                            <option value="">Seleccione...</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>

                        <div class="mt-4">
                            <button class="btn btn-success" wire:click="save">Guardar</button>
                            <a href="{{ route('puestos.index') }}" class="btn btn-danger">Volver</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
