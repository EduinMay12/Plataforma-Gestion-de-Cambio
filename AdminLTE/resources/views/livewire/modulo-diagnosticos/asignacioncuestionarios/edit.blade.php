<div class="col-8">

    @include('livewire.modulo-diagnosticos.asignacioncuestionarios.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
    </div>
    <br>


    <div class="form-group">
        <label for="">Preguntas del cuestionario Verdader / Falso: </label><br>
        @foreach($preguntas as $item)
        <div class="form-check form-check-inline position-bottom">

                    <label class="form-check-label" for="inlineRadio1">{{ $item->textPregunta }}</label>

           
        </div><br><br>
        @endforeach

        @error('textRespuesta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
 

    <div class="mt-4">
        <button wire:click="uddate1" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
        <button wire:click="table" class="btn btn-danger">Volver</button>
    </div>

</div>
