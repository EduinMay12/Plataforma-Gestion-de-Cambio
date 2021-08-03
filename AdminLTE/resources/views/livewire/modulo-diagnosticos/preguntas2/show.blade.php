
<label for="">Cuestionario: </label>
<span>{{ $pregunta->cuestionario->nombre }}</span><br>

<label for="">Descripción corta: </label>
<span>{{ $pregunta->textPregunta }}</span><br>

<label for="">Descripción corta: </label>
<span>{{ $pregunta->descripcion }}</span><br>

<div class="mt-4">
    <button wire:click="table({{ $pregunta->cuestionario_id}},{{ $pregunta->id }})" class="btn btn-danger">Volver</button>
</div>

