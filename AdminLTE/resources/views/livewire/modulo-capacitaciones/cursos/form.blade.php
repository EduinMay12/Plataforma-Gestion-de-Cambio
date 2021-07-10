<div class="form-group">
    <label for="">Categoria: </label>
    <span>{{ $categoria->nombre }}</span>
</div>

<div class="form-group">
    <label for="">Nombre:*</label>
    <input wire:model="nombre" type="text" class="form-control">

    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    <div wire:loading wire:target="imagen" class="alert alert-info" role="alert">
        ¡Espera es esta cargando la imagen!
    </div>
    @if ($imagen)
        <img class="col-auto" src="{{ $imagen->temporaryUrl() }}">
    @elseif($imagen_curso)
        <img class="col-auto" src="{{ Storage::url($imagen_curso) }}">
    @endif
</div>


<div class="form-group">
    <label for="">Imagen:*</label>
    <input type="file" class="form-control" accept="image/*" wire:model="imagen" id="{{ $identificador }}">

    @error('imagen')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Descripción corta:*</label>
    <input wire:model="descorta" type="text" class="form-control">

    @error('descorta')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Descripción larga</label>
    <textarea wire:model="deslarga" class="form-control" rows="8"></textarea>

    @error('deslarga')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Requisitos:*</label>
    <textarea wire:model="requisitos" class="form-control" rows="8"></textarea>

    @error('requisitos')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Horas:*</label>
    <input wire:model="horas" class="form-control" type="number">

    @error('horas')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Estatus:*</label>
    <select wire:model="status" class="form-control">
        <option value="">Seleccione...</option>
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
    </select>

    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Seleccione al instructor</label>
    <select wire:model="instructore_id" class="form-control">
        <option value="">Seleccione...</option>
        @foreach ($instructores as $instructore)
            <option value="{{ $instructore->id }}">{{ $instructore->user->name }}</option>
        @endforeach
    </select>

    @error('instructore_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
