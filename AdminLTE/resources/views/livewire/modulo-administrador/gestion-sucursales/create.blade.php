<div class="col-12">

    @include('livewire.modulo-administrador.gestion-sucursales.form')

    <div class="mt-4">
        <button wire:click="store" wire:loading.attr="disabled" wire:target="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $empresa->id }})" class="btn btn-danger">Volver</button>
    </div>

</div>
