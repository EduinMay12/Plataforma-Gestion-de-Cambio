<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Pregunta: </label>
            <span>{{ $pregunta->textPregunta }}</span>
        </div>

        <div class="form-group">
            <label for="">Descripción: </label>
            <span>{{ $pregunta->descripcion }}</span>
        </div>

        <div class="form-group">
            <label for="">Respuesta:* </label>
            <textarea wire:model="textRespuesta" class="form-control" rows="4"></textarea>
        
            @error('textRespuesta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

