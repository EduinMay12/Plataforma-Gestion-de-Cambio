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
            <label for="">Respuesta:* </label><br>
            @foreach($opciones as $item)
            <div class="form-check form-check-inline position-bottom">
                <input class="form-check-input" type="radio" wire:model="textRespuesta" value="{{ $item->opcion}}">
                <label class="form-check-label" for="inlineRadio1">{{ $item->opcion }}</label>
            </div>
            @endforeach

            @error('textRespuesta')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

