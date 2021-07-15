<div class="col-8">

    @include('livewire.modulo-capacitaciones.cursos.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="imagen, update"
            class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $categoria->id }})" class="btn btn-danger">Volver</button>
    </div>

</div>
