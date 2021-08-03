<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Cuestionario: </label>
            <span>{{ $cuestionario->nombre }}</span>
        </div>

        <div class="form-group">
            <label for="">Descripción:*</label>
            <input wire:model.defer="descripcion" type="text" class="form-control">

            @error('descripcion')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Texto de la pregunta:*</label>
            <input wire:model.defer="textPregunta" type="text" class="form-control">

            @error('textPregunta')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

    </div>
</div>

<div class="row">
    <div class="col-8">
        <div class="alert alert-info" role="alert">
            Nota: agregue un valor de 100 a la respuesta correcta, a las respuestas incorrectas el valor de 0
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <label for="">Opciones: </label>
    </div>
    <div class="col-2">
        <label for="">Valor de la pregunta: </label>
    </div>
    <div class="col-6">
        <label for="">Explicaciones: </label>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 1" wire:model.defer="opcion1" type="text" class="form-control">

        @error('opcion1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-2">
        <input wire:model="valor1" type="number" class="form-control">

        @error('valor1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <textarea wire:model.defer="explicacion1" placeholder="explicacion 1" rows="2" class="form-control"></textarea>

        @error('explicacion1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 2" wire:model.defer="opcion2" type="text" class="form-control">

        @error('opcion2')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-2">
        <input wire:model="valor2" type="number" class="form-control">

        @error('valor2')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <textarea wire:model.defer="explicacion2" placeholder="explicacion 2" rows="2" class="form-control"></textarea>

        @error('explicacion2')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 3" wire:model.defer="opcion3" type="text" class="form-control">

        @error('opcion3')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-2">
        <input wire:model="valor3" type="number" class="form-control">

        @error('valor3')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <textarea wire:model.defer="explicacion3" placeholder="explicacion 3" rows="2" class="form-control"></textarea>

        @error('explicacion3')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input wire:model.defer="opcion4" placeholder="opción 4" type="text" class="form-control">

        @error('opcion4')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-2">
        <input wire:model="valor4" type="number" class="form-control">

        @error('valor4')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <textarea wire:model.defer="explicacion4" placeholder="explicacion 4" rows="2" class="form-control"></textarea>

        @error('explicacion4')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div><br>

<div class="row">
    <div class="col-4">
        <input placeholder="opción 5" wire:model.defer="opcion5" type="text" class="form-control">

        @error('opcion5')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-2">
        <input wire:model="valor5" type="number" class="form-control">

        @error('valor5')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="col-6">
        <textarea wire:model.defer="explicacion5" placeholder="explicacion 5" rows="2" class="form-control"></textarea>

        @error('explicacion5')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

</div><br>
