<div class="card">
    <div class="card-body -btn btn-secondary disabled">
       <center> <img class="col-6" src="{{ Storage::url($comunicacion->imagen) }}"></center>
    </div>
</div>

<label for="">Nombre: </label>
<span>{{ $comunicacion->name }}</span><br>

<label for="">Categoria: </label>
<span>{{ $comunicacion->descripcion }}</span><br>

<label for="">Estatus: </label>
@if ($comunicacion->status == 1)
<span class="badge badge-pill badge-success">Activo</span><br>
@elseif($comunicacion->status == 0)
<span class="badge badge-pill badge-danger">Inactivo</span><br>
@endif
<div class="mt-4">
    <a href="/comunicacion" class="btn btn-danger">Volver</a>
</div>
