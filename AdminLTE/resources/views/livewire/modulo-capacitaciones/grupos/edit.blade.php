<div class="col-8">

    @include('livewire.modulo-capacitaciones.grupos.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="imagen, update" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $categoria->id }}, {{ $curso->id }})" class="btn btn-danger">Volver</button>
    </div>

</div>