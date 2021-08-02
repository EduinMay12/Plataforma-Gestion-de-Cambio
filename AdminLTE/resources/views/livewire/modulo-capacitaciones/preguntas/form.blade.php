<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Cuestionario: </label>
            <span>{{$cuestionario->nombre}}</span>
        </div>

        <div class="form-group">
            <label for="">Descripción:*</label>
            <input wire:model="descripcion" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Texto de la pregunta:*</label>
            <input wire:model="textPregunta" type="text" class="form-control">
        </div>

    </div>
</div>

<div class="row">
    <div class="col-4">
        <label for="">Opciones: </label>
    </div>
    <div class="col-2">
        <label for="">Respuesta correcta: </label>
    </div>
    <div class="col-6">
        <label for="">Explicaciones: </label>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 1" wire:model="opcion1" type="text" class="form-control">
    </div>

    <div class="col-2">
        <div class="form-check d-flex justify-content-center mt-2">
            <input wire:model="valor1" @if() value="100" @else value="0" @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          </div>
    </div>

    <div class="col-6">
        <textarea wire:model="explicacion1" placeholder="explicacion 1" rows="2" class="form-control"></textarea>
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 2" wire:model="opcion2" type="text" class="form-control">
    </div>

    <div class="col-2">
        <div class="form-check d-flex justify-content-center mt-2">
            <input wire:model="valor2" @if('checked') value="100" @else value="0" @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          </div>
    </div>

    <div class="col-6">
        <textarea wire:model="explicacion2" placeholder="explicacion 2" rows="2" class="form-control"></textarea>
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 3" wire:model="opcion3" type="text" class="form-control">
    </div>

    <div class="col-2">
        <div class="form-check d-flex justify-content-center mt-2">
            <input wire:model="valor3" @if('checked') value="100" @else value="0" @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          </div>
    </div>

    <div class="col-6">
        <textarea wire:model="explicacion3" placeholder="explicacion 3" rows="2" class="form-control"></textarea>
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input wire:model="opcion4" placeholder="opción 4" type="text" class="form-control">
    </div>

    <div class="col-2">
        <div class="form-check d-flex justify-content-center mt-2">
            <input wire:model="valor4" @if('checked') value="100" @else value="0" @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          </div>
    </div>

    <div class="col-6">
        <textarea wire:model="explicacion4" placeholder="explicacion 4" rows="2" class="form-control"></textarea>
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 5" wire:model="opcion5" type="text" class="form-control">
    </div>

    <div class="col-2">
        <div class="form-check d-flex justify-content-center mt-2">
            <input wire:model="valor5" @if('checked') value="100" @else value="0" @endif class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          </div>
    </div>

    <div class="col-6">
        <textarea wire:model="explicacion5" placeholder="explicacion 5" rows="2" class="form-control"></textarea>
    </div>

</div><br>
