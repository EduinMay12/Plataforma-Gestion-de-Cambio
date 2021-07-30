<div class="form-group">
    <label for="">Curso: </label>
    <span>{{ $curso->nombre }}</span>
</div>

<div class="form-group">
    <label for="">Lección: </label>
    <span>{{ $leccione->nombre }}</span>
</div>

<div class="form-group">
    <label for="">Nombre:* </label>
    <input wire:model="nombre" type="text" class="form-control">

    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Descripción:*</label>
    <textarea wire:model="descripcion" class="form-control" rows="5"></textarea>

    @error('descripcion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Clasificación:*</label>
    <select wire:model="tipo" class="form-control">
        <option value="">Seleccione...</option>
        <option value="video">Video</option>
        <option value="audio">Audio</option>
        <option value="documento">Documento(Word)</option>
        <option value="pdf">PDF</option>   
    </select>    

    @error('tipo')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">URL:*</label>
    <input placeholder="https://example.com" wire:model="url" class="form-control" type="text">

    @error('url')
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


