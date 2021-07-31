<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-6">

                        <div class="form-group">
                            <label for="">Nombre:</label>
                            <input class="form-control" wire:model="nombre">

                            @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success" wire:click="save">Guardar</button>
                            <a href="{{ route('niveles.index') }}" class="btn btn-danger">Volver</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
