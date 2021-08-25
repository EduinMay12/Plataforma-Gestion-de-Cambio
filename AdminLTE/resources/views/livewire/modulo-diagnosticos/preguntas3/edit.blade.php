<div class="col-12">

    @include('livewire.modulo-diagnosticos.preguntas3.form')

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
            <input placeholder="opción" wire:model.defer="opcion" type="text" class="form-control">
    
            @error('opcion')
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
        {{--<input placeholder="respuesta" wire:model.defer="respuesta" type="text" class="form-control">--}}

        @error('respuesta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div><br>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 2: </label>
            <input placeholder="opción" wire:model.defer="opcion1" type="text" class="form-control">
    
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
        {{--<input placeholder="respuesta1" wire:model.defer="respuesta1" type="text" class="form-control">--}}

        @error('respuesta1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 3: </label>
            <input placeholder="opción" wire:model.defer="opcion2" type="text" class="form-control">
    
            @error('opcion2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor2" type="number" class="form-control">
    
            @error('valor2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion2" placeholder="explicación" rows="2" class="form-control"></textarea>
    
            @error('explicacion2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <select wire:model.defer="respuesta2" class="form-control">
            <option value="">Seleccionar ...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>   
        </select>
        {{--<input placeholder="respuesta2" wire:model.defer="respuesta2" type="text" class="form-control">--}}

        @error('respuesta2')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 4: </label>
            <input placeholder="opción" wire:model.defer="opcion3" type="text" class="form-control">
    
            @error('opcion3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor3" type="number" class="form-control">
    
            @error('valor3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion3" placeholder="explicación" rows="2" class="form-control"></textarea>
    
            @error('explicacion3')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <select wire:model.defer="respuesta3" class="form-control">
            <option value="">Seleccionar ...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>   
        </select>
        {{--<input placeholder="respuesta3" wire:model.defer="respuesta3" type="text" class="form-control">--}}

        @error('respuesta3')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 5: </label>
            <input placeholder="opción" wire:model.defer="opcion4" type="text" class="form-control">
    
            @error('opcion4')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-2">
            <label for="">Valor: </label>
            <input wire:model="valor4" type="number" class="form-control">
    
            @error('valor4')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
        <div class="col-6">
            <label for="">Explicación: </label>
            <textarea wire:model.defer="explicacion4" placeholder="explicación" rows="2" class="form-control"></textarea>
    
            @error('explicacion4')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <select wire:model.defer="respuesta4" class="form-control">
            <option value="">Seleccionar ...</option>
            <option value="Correcto">Correcto</option>
            <option value="Incorrecto">Incorrecto</option>   
        </select>
        {{--<input placeholder="respuesta4" wire:model.defer="respuesta4" type="text" class="form-control">--}}

        @error('respuesta4')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    

    <div class="mt-4">
        <button wire:click="update1" wire:loading.attr="disabled" wire:target="update1" class="btn btn-success">Guardar</button>
        <button wire:click="table({{ $cuestionario3->id }})" class="btn btn-danger">Volver</button>
        
    </div>
    <br>

    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr class="th-color">

                        <th>Opciones</th>
                        <th>Valor</th>
                        <th>Explicaicón</th>
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
                            <button wire:click="$emit('deleteOpcion', {{ $opcione->id }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    

</div>
