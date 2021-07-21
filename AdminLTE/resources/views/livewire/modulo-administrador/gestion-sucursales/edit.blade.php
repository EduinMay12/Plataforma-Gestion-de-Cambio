<div class="col-12">

    @include('livewire.modulo-administrador.gestion-sucursales.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update"
            class="btn btn-success">Guardar</button>
        <a href="/modulo-administrador/gestionsucursal" class="btn btn-danger">Volver</a>
    </div>

</div>
