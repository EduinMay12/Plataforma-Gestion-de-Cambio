<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-12">

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Nombre:</label>
                            <input class="form-control" wire:model="puesto.nombre">

                            @error('puesto.nombre')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="">Descripción:</label>
                            <input class="form-control" wire:model="puesto.descripcion">

                            @error('puesto.descripcion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <label for="">Puesto a quien reporta:</label>
                    <select wire:model="puesto.reporta_a" class="form-control col-md-4">
                        <option value="">{{ $puesto->reporta_a }}</option>
                        @foreach($puestos as $item)
                        <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                        @endforeach
                    </select>

                    <label for="estatus">Estatus:</label>
                    <select wire:model="puesto.estatus" class="form-control col-md-4">
                        <option value="">Seleccione...</option>
                        <option value="1">Activo</option>
                        <option value="2">Inactivo</option>
                    </select> 

                    <br>
                    
                    <form action="{{ route('competencia-puesto.recuperar', $puesto) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="">Competencia:</label>
                                <select name="competencia" class="form-control"> 
                                    <option value="">Seleccione...</option>
                                    @foreach($competencias as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                   @endforeach
                                </select>
                            </div>

                            <div class="col-4">
                                <br>
                            @foreach($niveles as $item)
                                <div class="form-check form-check-inline position-bottom">
                                    <input class="form-check-input" type="radio" name="nivel_id" value="{{$item->id}}">
                                    <label class="form-check-label" for="inlineRadio1">{{ $item->nombre }}</label>
                                </div>
                            @endforeach
                            </div>

                        <br>                 

                            <div class="col-2">
                                <br>
                                <button class="btn btn-success" type="submit">Agregar</button>
                            </div>
                        </div>

                        
                    </form>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="th-color">
                                        <th>Competencia</th>
                                        <th>Nivel</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($puesto->competencias as $item) 
                                    <tr>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->pivot->nivel_id }}</td>
                                        <td>
                                            <form action="{{ route('competencia-puesto.borrar', $puesto) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('puestos.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
