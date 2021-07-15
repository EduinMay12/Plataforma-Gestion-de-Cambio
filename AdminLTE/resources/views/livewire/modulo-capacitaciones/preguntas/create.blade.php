

    @include('livewire.modulo-capacitaciones.preguntas.form')

    <div class="mt-4">
        <button wire:click="store" wire:loading.attr="disabled" wire:target="store"
            class="btn btn-success">Guardar</button>
        <button wire:click="" class="btn btn-danger">Volver</button>
    </div>
