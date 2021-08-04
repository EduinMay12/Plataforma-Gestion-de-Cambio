<label for="">Cuestionario: </label>
<span>{{ $pregunta->cuestionario->nombre }}</span><br>

<label for="">Descripcion de la pregunta: </label>
<span>{{ $pregunta->descripcion }}</span><br>

<label for="">Pregunta: </label>
<span>{{ $pregunta->textPregunta }}</span><br>

<div class="col-6">
    <table class="table table-sm table-bordered mt-4 table-responsive">
        <thead>
            <tr class="table-primary">
                <th class="col-2">Opción</th>
                <th class="col-1">Valor</th>
                <th class="col-3">Explicación</th>
            </tr>
        </thead>
        <tbody>
            @if($pregunta->valor1 == 100)
                <tr class="table-success">
            @else
                <tr>
            @endif
                <td>{{$pregunta->opcion1}}</td>
                <td>{{$pregunta->valor1}}</td>
                <td>{{$pregunta->explicacion1}}</td>
            </tr>


            @if($pregunta->valor2 == 100)
                <tr class="table-success">
            @else
                <tr>
            @endif
                <td>{{$pregunta->opcion2}}</td>
                <td>{{$pregunta->valor2}}</td>
                <td>{{$pregunta->explicacion2}}</td>
            </tr>
            
            @if($pregunta->valor3 == 100)
                <tr class="table-success">
            @else
                <tr>
            @endif
                <td>{{$pregunta->opcion3}}</td>
                <td>{{$pregunta->valor3}}</td>
                <td>{{$pregunta->explicacion3}}</td>
            </tr>

            @if($pregunta->valor4 == 100)
                <tr class="table-success">
            @else
                <tr>
            @endif
                <td>{{$pregunta->opcion4}}</td>
                <td>{{$pregunta->valor4}}</td>
                <td>{{$pregunta->explicacion4}}</td>
            </tr>

            @if($pregunta->valor5 == 100)
                <tr class="table-success">
            @else
                <tr>
            @endif
                <td>{{$pregunta->opcion5}}</td>
                <td>{{$pregunta->valor5}}</td>
                <td>{{$pregunta->explicacion5}}</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="mt-4">
    <button wire:click="table({{ $pregunta->cuestionario_id }})" class="btn btn-danger">Volver</button>
</div>