<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body btn btn-secondary">
               <center> <img class="mb-3 position-relative" src="{{ Storage::url($elemento->imagen) }}"></center>
            </div>
        </div>
    </div>
    <div class="col-6">
        <iframe height="95%" width="100%"src="{{ $elemento->url }}" title="YouTube video" allowfullscreen></iframe>
    </div>
</div>

<label for="">Nombre : </label>
<span>{{ $elemento->name }}</span><br>

<label for="">Response : </label>
<span>{{ $elemento->user_id }}</span><br>

<label for="">Descripcion : </label>
<span>{{ $elemento->descripcion }}</span><br>

<label for="">Dirigido a : </label>
<span>{{ $elemento->dirigido }}</span><br>

<label for="">Contenido : </label>
<span>{{ $elemento->contenido }}</span><br>

<label for="">Link : </label>
<span>{{ $elemento->url }}</span><br>

<label for="">Estatus: </label>
@if ($elemento->status == 1)
<span class="badge badge-pill badge-success">Activo</span><br>
@elseif($elemento->status == 0)
<span class="badge badge-pill badge-danger">Inactivo</span><br>
@endif

<br>
<div class="mt-4">
    <a href="/elemento" class="btn btn-danger">Volver</a>
</div>
