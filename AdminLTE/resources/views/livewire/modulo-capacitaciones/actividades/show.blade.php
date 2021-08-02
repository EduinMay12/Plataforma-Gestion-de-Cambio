<label for="">Curso: </label>
<span>{{ $actividade->leccione->curso->nombre }}</span><br>

<label for="">Lección: </label>
<span>{{ $actividade->leccione->nombre }}</span><br>

<label for="">Nombre: </label>
<span>{{ $actividade->nombre }}</span><br>

<label for="">Descripción: </label>
<span>{{ $actividade->descripcion }}</span><br>

<label for="">Cuestionario: </label>
<span>{{ $actividade->cuestionario->nombre }}</span><br>

<label for="">Estatus: </label>
@if ($actividade->status == 1)
    <span>Activo</span><br>
@elseif($actividade->status == 0)
    <span>Inactivo</span><br>
@endif

<div class="mt-4">
    <button wire:click="table({{$actividade->leccione->curso->id}},{{$actividade->leccione_id}})" class="btn btn-danger">Volver</button>
</div>