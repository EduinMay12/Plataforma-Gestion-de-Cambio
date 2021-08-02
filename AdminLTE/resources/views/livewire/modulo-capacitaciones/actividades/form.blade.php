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
    <label for="">Cuestionario:*</label>
    <select wire:model="cuestionario_id" class="form-control">
        <option value="">Seleccione...</option>
        @foreach($cuestionarios as $cuestionario)
            <option value="{{$cuestionario->id}}">{{$cuestionario->nombre}}</option>
        @endforeach
    </select>    

    @error('cuestionario')
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


