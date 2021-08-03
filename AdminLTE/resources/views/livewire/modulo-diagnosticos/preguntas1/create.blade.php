<div class="col-8">

    @include('livewire.modulo-diagnosticos.preguntas1.form')

    <div class="mt-4">
        <button wire:click="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $cuestionario1->id }})" class="btn btn-danger">Volver</button>
        
    </div>

</div>
