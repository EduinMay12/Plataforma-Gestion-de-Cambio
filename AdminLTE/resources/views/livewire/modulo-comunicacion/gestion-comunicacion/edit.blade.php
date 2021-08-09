<div class="col-12">

    <div class="card-body row">
        <div class="col-6">

            <div class="form-group">
                <label for="">Nombre* :</label>
                <input type="text" class="form-control" wire:model="name">
                @error('name') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="">Descripcion* :</label>
                <textarea type="text" class="form-control" wire:model="descripcion"></textarea>
                @error('descripcion') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">

                <label for="">Agregar imagen* :</label>
                <br>
                <input type="file" accept="image/*" wire:model="imagen" id="{{ $identificador }}">
                    <br>
                @error('imagen') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="">Estatus* :</label>
                <select class="form-control" wire:model="status">
                    <option value="">Seleccione...</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
                @error('status') <span class="error badge badge-danger">{{ $message }}</span>@enderror
            </div>
            <div class="mt-4">
                <button class="btn btn-success" wire:click="update" wire:loading.attr="disabled" wire:target="imagen, update">Guardar</button>
                <a href="{{ route('comunicacion.index') }}" class="btn btn-danger">Volver</a>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body btn btn-secondary">
                    @if ($imagen)
                    <img class="col-6" src="{{ Storage::url($comunicacion->imagen) }}">
                    <img width="200" height="400" src="{{ $imagen->temporaryUrl() }}" class="card-img-top col-auto" alt="...">
                    @endif
                    <br>
                    <center>
                        <div wire:loading wire:target="imagen" class="alert alert-info" role="alert">
                            ¡Espera es esta cargando la imagen! <i class="fa fa-spinner fa-spin"></i>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

</div>
