<div class="col-12">

    @include('livewire.modulo-diagnosticos.preguntas2.form')


    <div class="row">
        <div class="col-4">
                <label for="">Opción 1: </label>
            <input placeholder="opcion" wire:model.defer="opcion" type="text" class="form-control">
    
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
            <textarea wire:model.defer="explicacion" placeholder="explicacion" rows="2" class="form-control"></textarea>
    
            @error('explicacion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <input placeholder="respuesta" wire:model.defer="respuesta" type="text" class="form-control">

        @error('respuesta')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div><br>

    <div class="row">
        <div class="col-4">
            <label for="">Opción 2: </label>
            <input placeholder="opcion1" wire:model.defer="opcion1" type="text" class="form-control">
    
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
            <textarea wire:model.defer="explicacion1" placeholder="explicacion1" rows="2" class="form-control"></textarea>
    
            @error('explicacion1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    
    </div><br>

    <div class="col-4">
        <label for="">Respuesta: </label>
        <input placeholder="respuesta1" wire:model.defer="respuesta1" type="text" class="form-control">

        @error('respuesta1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
        
    </div><br>
    


    <div class="row">
        <div class="col-4">
                <label for="">Opción 1: </label>
                <select wire:model.defer="opcion" class="form-control">
                    <option value="">Seleccionar ...</option>
                    <option value="Verdadero">Verdadero</option>
                    <option value="Falso">Falso</option>
                   
                </select>
           {{--eholder="opcion" wire:model.defer="opcion" type="text" class="form-control">--}}
    
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
            <textarea wire:model.defer="explicacion" placeholder="explicacion" rows="2" class="form-control"></textarea>
    
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
            <select wire:model.defer="opcion1" class="form-control">
                <option value="">Seleccionar ...</option>
                <option value="Verdadero">Verdadero</option>
                <option value="Falso">Falso</option>
               
            </select>
       {{--eholder="opcion" wire:model.defer="opcion" type="text" class="form-control">--}}

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
            <textarea wire:model.defer="explicacion1" placeholder="explicacion1" rows="2" class="form-control"></textarea>
    
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
        <button wire:click="update1" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Guardar</button>
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
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($opciones as $item) 
                    <tr>
                        <td>{{ $item->opcion }}</td>
                        <td>{{ $item->valor }}</td>
                        <td>
                            <button wire:click="borrar({{ $item }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
