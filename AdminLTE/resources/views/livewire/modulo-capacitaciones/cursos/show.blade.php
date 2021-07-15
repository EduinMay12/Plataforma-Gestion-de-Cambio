<label for="">Categoria: </label>
<span>{{ $curso->categoria->nombre }}</span><br>

<label for="">Instructor: </label>
<span>{{ $curso->instructore->user->name }}</span><br>

<label for="">Nombre: </label>
<span>{{ $curso->nombre }}</span><br>

<label for="">Imagen: </label><br>
<img class="col-6" src="{{ Storage::url($curso->imagen) }}"><br>

<label for="">Descripció corta: </label>
<span>{{ $curso->descorta }}</span><br>

<label for="">Descripcion larga: </label>
<span>{{ $curso->deslarga }}</span><br>

<label for="">Requisitos: </label>
<span>{{ $curso->requisitos }}</span><br>

<label for="">Horas: </label>
<span>{{ $curso->horas }}</span><br>

<label for="">Estatus: </label>
@if ($curso->status == 1)
    <span>Activo</span><br>
@elseif($curso->status == 0)
    <span>Inactivo</span><br>
@endif

<div class="mt-4">
    <button wire:click="table({{ $curso->categoria_id }})" class="btn btn-danger">Volver</button>
</div>
