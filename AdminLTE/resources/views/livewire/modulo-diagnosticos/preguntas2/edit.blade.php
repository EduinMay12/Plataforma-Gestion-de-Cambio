<div class="col-12">

    @include('livewire.modulo-diagnosticos.preguntas2.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Actualizar</button>
        
    </div><br>
    
    <div class="row">
        <div class="col-8">
            <div class="alert alert-info" role="alert">
                Nota: la opción correcta debe tener un valor de 100
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
                <label for="">Opción 1: </label>
                <input type="text" wire:model="opci" class="form-control" value="{{ $opci }}" readonly>
                {{--<select wire:model="opcion" class="form-control">
                    <option value="">Seleccionar ...</option>
                    <option selected value="Verdadero">Verdadero</option>
                    <option value="Falso">Falso</option>
                </select>--}}
    
            @error('opci')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor" type="number" class="form-control">
    
            @error('valor')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion" placeholder="explicación" rows="2" class="form-control"></textarea>
    
            @error('explicacion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <select wire:model.defer="respuesta" class="form-control">
            <option value="">Seleccionar ...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>   
        </select>
        @error('respuesta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div><br>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 2: </label>
            <input type="text" wire:model="opcion1" class="form-control" value="{{ $opcion1 }}" readonly>

        @error('opcion1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor1" type="number" class="form-control">
    
            @error('valor1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion1" placeholder="explicación" rows="2" class="form-control"></textarea>
    
            @error('explicacion1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <select wire:model.defer="respuesta1" class="form-control">
            <option value="">Seleccionar ...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>   
        </select>
        @error('respuesta1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    

    <div class="mt-4">
        <button wire:click="update1" wire:loading.attr="disabled" wire:target="update1" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $cuestionario2->id }})" class="btn btn-danger">Volver</button>     
    </div>
<br>
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr class="th-color">

                        <th>Opciones</th>
                        <th>Valor</th>
                        <th>Explicación</th>
                        <th>Respuesta</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($opciones as $opcione) 
                    <tr>
                        <td>{{ $opcione->opcion }}</td>
                        <td>{{ $opcione->valor }}</td>
                        <td>{{ $opcione->explicacion }}</td>
                        <td>{{ $opcione->respuesta }}</td>

                        <td>
                            <button wire:click="editOpcion({{ $opcione->id }})"
                                class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        <td>
                            <button name="click" wire:click="$emit('deleteOpcione', {{ $opcione->id }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
