<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-6">

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" wire:model="nivele.nombre">

                        @error('nivele.nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('niveles.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
