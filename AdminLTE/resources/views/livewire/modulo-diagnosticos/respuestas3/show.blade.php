
<label for="">Pregunta: </label>
<span>{{ auth()->user()->name }}</span><br>

<label for="">Pregunta: </label>
<span>{{ $respuesta->pregunta->textPregunta }}</span><br>

<label for="">Respuesta: </label>
<span>{{ $respuesta->textRespuesta }}</span><br>

<div class="mt-4">
    <button wire:click="table({{ $respuesta->pregunta_id}},{{ $respuesta->id }})" class="btn btn-danger">Volver</button>
</div>

