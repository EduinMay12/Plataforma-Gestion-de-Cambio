
<label for="">Alumno: </label>
<span>{{ $profesor->nombre }}</span><br>

<label for="">Pregunta: </label>
<span>{{ $profesor->apellido }}</span><br>

<div class="mt-4">
    <button wire:click="table({{ $profesor->id }})" class="btn btn-danger">Volver</button>
</div>

