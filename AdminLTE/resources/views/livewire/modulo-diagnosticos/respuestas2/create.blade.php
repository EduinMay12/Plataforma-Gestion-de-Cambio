<div class="col-8">

    @include('livewire.modulo-diagnosticos.respuestas2.form')

    <div class="mt-4">
        <button wire:click="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $pregunta->id }})" class="btn btn-danger">Volver</button>
        
    </div>

</div>
