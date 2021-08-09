
<label for="">Participante: </label>
<span>{{ $asignacioncuestionario->participante_id }}</span><br>

<label for="">Cuestionario: </label>
<span>{{ $asignacioncuestionario->cuestionario_id }}</span><br>

<label for="">Fecha Asignada: </label>
<span>{{ $asignacioncuestionario->fecha_asignada }}</span><br>

<label for="">Fecha Limite: </label>
<span>{{ $asignacioncuestionario->fecha_limite }}</span><br>

<div class="mt-4">
    <button wire:click="table" class="btn btn-danger">Volver</button>
</div>

