<div class="col-8">

    @include('livewire.modulo-diagnosticos.asignacioncuestionario1s.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Actualizar</button>
        <button wire:click="table" class="btn btn-danger">Volver</button>
    </div>
    <br>


    <div class="form-group">
        <P><b>PREGUNTAS DEL CUESTIONARIO OPCIÓN MÚLTIPLES:</b></P>
        <div class="checkbox" class="form-control">
            <label>
                @foreach ($preguntas as $item)
                {{ $item->textPregunta }}
                <input type="checkbox" name="preguntas[]" value="{{ $item->textPregunta }}"><br><br>
                @endforeach
            </label>
          </div>

        @error('textPregunta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>


</div>
