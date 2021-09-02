<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Nombre:* </label>
            <input wire:model="nombre" type="text" class="form-control">
        
            @error('nombre')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Apellido:* </label>
            <input wire:model="apellido" type="text" class="form-control">
        
            @error('apellido')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

