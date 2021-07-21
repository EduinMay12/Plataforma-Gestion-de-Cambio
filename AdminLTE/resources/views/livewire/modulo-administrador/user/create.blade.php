<div class="col-12">

    @include('livewire.modulo-administrador.user.form')

    <div class="mt-4">
        <button wire:click="store" wire:loading.attr="disabled" wire:target="store" class="btn btn-success">Guardar</button>
        <a href="{{ route('users.index') }}" class="btn btn-danger">Volver</a>
    </div>

</div>
