<label for="">Curso: </label>
<span>{{ $recurso->leccione->curso->nombre }}</span><br>

<label for="">Lección: </label>
<span>{{ $recurso->leccione->nombre }}</span><br>

<label for="">Nombre: </label>
<span>{{ $recurso->nombre }}</span><br>

<label for="">Descripción: </label>
<span>{{ $recurso->descripcion }}</span><br>

<label for="">Tipo: </label>
<span>{{ $recurso->tipo }}</span><br>

<label for="">Url: </label>
<a href="{{ $recurso->url }}" target="_blank">{{ $recurso->url }}</a><br>

<label for="">Estatus: </label>
@if ($recurso->status == 1)
    <span>Activo</span><br>
@elseif($recurso->status == 0)
    <span>Inactivo</span><br>
@endif

<div class="mt-4">
    <button wire:click="table({{$recurso->leccione->curso->id}},{{$recurso->leccione_id}})" class="btn btn-danger">Volver</button>
</div>