<label for="">Categoria: </label>
<span>{{ $grupo->curso->categoria->nombre }}</span><br>

<label for="">Curso: </label>
<span>{{ $grupo->curso->nombre }}</span><br>

<label for="">Nombre: </label>
<span>{{ $grupo->nombre }}</span><br>

<label for="">Estatus: </label>
@if ($grupo->status == 1)
    <span>Activo</span><br>
@elseif($grupo->status == 0)
    <span>Inactivo</span><br>
@endif 

<label for="">Descripción corta: </label>
<span>{{ $grupo->descorta }}</span><br>

<label for="">Fecha Inicio </label>
<span>{{ $grupo->fechaInicio }}</span><br>

<label for="">Fecha Fin </label>
<span>{{ $grupo->fechaFin }}</span><br>

<label for="">Imagen: </label><br>
<img class="col-6" src="{{ Storage::url($grupo->imagen) }}"><br>

<label for="">Horarios: </label>
<div class="border border-primary">{!! $grupo->horarios !!}</div>

<div class="mt-4">
    <button wire:click="table({{ $grupo->curso->categoria->id}},{{ $grupo->curso_id }})" class="btn btn-danger">Volver</button>
</div>