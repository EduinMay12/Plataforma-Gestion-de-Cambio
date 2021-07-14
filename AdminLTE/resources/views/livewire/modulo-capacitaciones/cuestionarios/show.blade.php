<label for="">Nombre: </label>
<span>{{ $cuestionario->nombre }}</span><br>

<label for="">Descripción: </label>
<span>{{ $cuestionario->descripcion }}</span><br>

<label for="">Estatus: </label>
@if ($cuestionario->status == 1)
    <span>Activo</span>
@elseif($cuestionario->status == 0)
    <span>Inactivo</span>
@endif

<div class="mt-4">
    <button wire:click="table" class="btn btn-danger">Volver</button>
</div>