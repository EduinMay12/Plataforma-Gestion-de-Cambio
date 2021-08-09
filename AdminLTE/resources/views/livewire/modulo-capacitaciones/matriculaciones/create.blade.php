
    @include('livewire.modulo-capacitaciones.matriculaciones.form')

    <div class="mt-4">
        <button wire:click="store" wire:loading.attr="disabled" wire:target="store" class="btn btn-success">Guardar</button>
        <button wire:click="table({{$categoria->id}}, {{$curso->id}}, {{$grupo->id}})" class="btn btn-danger">Volver</button>
    </div>

