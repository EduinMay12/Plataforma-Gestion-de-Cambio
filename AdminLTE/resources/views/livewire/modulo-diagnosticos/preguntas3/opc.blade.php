<div class="col-12">
    <div class="row">

        <div class="col-4">
            <label for="">Opción: </label>
            <input wire:model="opcion9" type="text" class="form-control">
    
            @error('opcion9')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-4">
            <label for="">Valor: </label>
            <input wire:model="valor9" type="number" class="form-control">
    
            @error('valor9')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    
    <div class="row">

        <div class="col-4">
            <label for="">Explicación: </label><br>
            {{--<input wire:model="explicacion9" type="text" class="form-control">--}}
            <textarea wire:model="explicacion9" rows="2" class="form-control"></textarea>
    
            @error('explicacion9')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-4">
            <label for="">Respuesta: </label>
            <select wire:model="respuesta9" class="form-control">
                <option value="">Seleccionar ...</option>
                <option value="Correcto">Correcto</option>
                <option value="Incorrecto">Incorrecto</option>   
            </select>
            @error('respuesta9')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="mt-4">
        <button wire:click="update2" wire:loading.attr="disabled" wire:target="update2" class="btn btn-success">Actualizar</button>
        <button wire:click="table1({{ $pregunta->id }})" class="btn btn-danger">Volver</button>     
    </div>


</div>