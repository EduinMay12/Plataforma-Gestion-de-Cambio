<div class="col-8">

    @include('livewire.modulo-capacitaciones.recursos.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update"
            class="btn btn-success">Guardar</button>
        <button wire:click="table({{$curso->id}}, {{$leccione->id}})" class="btn btn-danger">Volver</button>
    </div>

</div>