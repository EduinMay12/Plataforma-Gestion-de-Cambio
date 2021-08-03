<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Cuestionario: </label>
            <span>{{ $cuestionario1->nombre }}</span>
        </div>

        <div class="form-group">
            <label for="">Pregunta:* </label>
            <input wire:model="textPregunta" type="text" class="form-control">
        
            @error('textPregunta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Descripcion:* </label>
            <input wire:model="descripcion" type="text" class="form-control">
        
            @error('descripcion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

