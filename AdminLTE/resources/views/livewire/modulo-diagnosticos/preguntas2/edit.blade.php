<div class="col-12">

    @include('livewire.modulo-diagnosticos.preguntas2.form')


    <div class="row">
        <div class="col-4">
                <label for="">Opción 1: </label>
            <input placeholder="opcion" wire:model.defer="opcion" type="text" class="form-control">
    
            @error('opcion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor" type="number" class="form-control">
    
            @error('valor')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion" placeholder="explicacion" rows="2" class="form-control"></textarea>
    
            @error('explicacion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <input placeholder="respuesta" wire:model.defer="respuesta" type="text" class="form-control">

        @error('respuesta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div><br>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 2: </label>
            <input placeholder="opcion1" wire:model.defer="opcion1" type="text" class="form-control">
    
            @error('opcion1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor1" type="number" class="form-control">
    
            @error('valor1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion1" placeholder="explicacion1" rows="2" class="form-control"></textarea>
    
            @error('explicacion1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <input placeholder="respuesta1" wire:model.defer="respuesta1" type="text" class="form-control">

        @error('respuesta1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $cuestionario2->id }})" class="btn btn-danger">Volver</button>
        
    </div>

</div>
