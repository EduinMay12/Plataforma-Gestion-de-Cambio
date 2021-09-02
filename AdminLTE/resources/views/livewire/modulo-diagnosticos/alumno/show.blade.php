
<label for="">Alumno: </label>
<span>{{ $alumno->nombre }}</span><br>

<label for="">Pregunta: </label>
<span>{{ $alumno->apellido }}</span><br>

<div class="mt-4">
    <button wire:click="table({{ $alumno->id }})" class="btn btn-danger">Volver</button>
</div>

