<div class="col-12">

    @include('livewire.modulo-diagnosticos.preguntas2.form') <br>

    <div class="row">

            <label for="opcion">Opción:</label>
            <select wire:model="opcion" class="form-control col-4">
                <option value="">Seleccione...</option>
                <option value="Verdadero">Verdadero</option>
                <option value="Falso">Falso</option>
            </select>
        

        <div class="col-2">
            <label for="">Valor:</label>
            <input wire:model="valor" type="number" class="form-control">
        </div>
    
        <div class="col-5">
            <label for="">Explicación:</label>
            <textarea wire:model="explicacion" class="form-control" rows="5"></textarea>
        </div>

    </div>

    <div class="row">

        <label for="">Respuesta:</label>
        <select wire:model="respuesta" class="form-control col-md-4">
            <option value="">Seleccione...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>
        </select>

    </div><br>

    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr class="th-color">
                        {{--<td>id</td>--}}
                        <th>Opciones</th>
                        <th>Valor</th>
                        <th>Explicación</th>
                        <th>Respuesta</th>

                        <th>Eliminar</th>
                    </tr>
                </thead>
                @foreach ($opciones as $opc)
                <tbody>
                    <tr>
                        {{--<td>{{ $opc->id }}</td>--}}
                        <td>{{ $opc->opcion }}</td>
                        <td>{{ $opc->valor }}</td>
                        <td>{{ $opc->explicacion }}</td>
                        <td>{{ $opc->respuesta }}</td>

                        <td>
                            <button wire:click="borrar({{ $opc->id }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $cuestionario2->id }})" class="btn btn-danger">Volver</button>
        
    </div>

</div>
