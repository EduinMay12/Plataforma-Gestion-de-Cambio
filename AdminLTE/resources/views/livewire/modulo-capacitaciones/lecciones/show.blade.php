<label for="">Curso: </label>
<span>{{ $leccione->curso->nombre }}</span><br>

<label for="">Nombre: </label>
<span>{{ $leccione->nombre }}</span><br>

<label for="">Descripción: </label>
<span>{{ $leccione->descripcion }}</span><br>

<label for="">Objetivo: </label>
<span>{{ $leccione->objetivo }}</span><br>

<label for="">Estatus: </label>
@if ($leccione->status == 1)
    <span>Activo</span><br>
@elseif($leccione->status == 0)
    <span>Inactivo</span><br>
@endif

<div class="mt-4">
    <button wire:click="table({{ $leccione->curso_id }})" class="btn btn-danger">Volver</button>
</div>