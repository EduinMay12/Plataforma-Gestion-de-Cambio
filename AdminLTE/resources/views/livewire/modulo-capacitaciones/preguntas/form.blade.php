<div class="row">
    <div class="col-8">

        <div class="form-group">
            <label for="">Cuestionario: </label>
            <span>Cuestionario 1</span>
        </div>

        <div class="form-group">
            <label for="">Descripción:*</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Texto de la pregunta</label>
            <input type="text" class="form-control">
        </div>

    </div>
</div>

@foreach($opciones as $opcion)

<div class="row">

    <div class="col-5">
        <label for="">Opción</label>
        <input type="text" class="form-control">
    </div>

    <div class="col-2">
        <label for="">Valor</label>
        <input type="number" class="form-control">
    </div>

    <div class="col-5">
        <label for="">Explicación</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>

</div>

@endforeach
