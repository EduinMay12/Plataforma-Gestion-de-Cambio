
<div class="form-group">
    <label for="">Participante:*</label>
    <select wire:model="participante_id" class="form-control">
        <option value="">Seleccione...</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach      
    </select>

    @error('participante_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<div class="form-group">
    <label for="">Cuestionario:*</label>
    <select wire:model="cuestionario_id" class="form-control">
        <option value="">Seleccione...</option>
        @foreach ($cuestionarios as $cuestionario)
            <option value="{{ $cuestionario->id }}">{{ $cuestionario->nombre }}</option>
        @endforeach      
    </select>

    @error('cuestionario_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Asignar Fecha:*</label>
    <input wire:model="fecha_asignada" type="date" class="form-control">

    @error('fecha_asignada')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="">Fecha Limite:*</label>
    <input wire:model="fecha_limite" type="date" class="form-control">

    @error('fecha_limite')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

