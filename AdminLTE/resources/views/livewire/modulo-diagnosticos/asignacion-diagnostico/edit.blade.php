<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-12">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Persona evaluada:</label>
                                <select wire:model="asignaciondiagnostico.user_id" class="form-control">
                                    <option value="">Seleccione ...</option>
                                    @foreach($users as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.user_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Puesto actual:</label>
                                <select wire:model="asignaciondiagnostico.puesto_actual" class="form-control">
                                    
                                    @foreach($puestos as $item)
                                    <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.puesto_actual')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Puesto futuro:</label>
                                <select wire:model="asignaciondiagnostico.puesto_futuro" class="form-control">
                                    
                                    @foreach($puestos as $item)
                                    <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.puesto_futuro')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Persona evaluador:</label>
                                <select wire:model="asignaciondiagnostico.evaluador" class="form-control">
                            
                                    @foreach($users as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.evaluador')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Rol Diagnóstico:</label>
                                <select wire:model="asignaciondiagnostico.rol_diagnostico" class="form-control">

                                    @foreach($rolesdiagnosticos as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.rol_diagnostico')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Reporta_a:</label>
                                <select wire:model="asignaciondiagnostico.reporta_a" class="form-control">

                                    @foreach($rolesdiagnosticos as $item)
                                    <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('asignaciondiagnostico.reporta_a')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('asignaciondiagnosticos.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
