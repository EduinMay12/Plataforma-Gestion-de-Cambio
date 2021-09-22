<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                        
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Persona participante:</label>
                            <select wire:model="user_id" class="form-control">
                                <option value="">Seleccione ...</option>
                                @foreach($users as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Puesto actual:</label>
                            <select wire:model="puesto_actual" class="form-control">
                                <option value="">Seleccione ...</option>
                                @foreach($puestos as $item)
                                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            @error('puesto_actual')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Puesto futuro:</label>
                            <select wire:model="puesto_futuro" class="form-control">
                                <option value="">Seleccione ...</option>
                                @foreach($puestos as $item)
                                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            @error('puesto_futuro')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Persona evaluador:</label>

                                <select wire:model="evaluador" class="form-control">
                                    <option value="">Seleccione...</option>
                                    @if ($rol_diagnostico == "Auto-evaluación")
                                        <option value="null">Campo nulo</option>
                                    @elseif($rol_diagnostico == 'Evaluador')
                                        @foreach($users1 as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                    
                            @error('evaluador')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Rol Evaluación:</label>
                            <select wire:model="rol_diagnostico" class="form-control">
                                <option value="">Seleccione ...</option>
                                @foreach($rolesdiagnosticos as $item)
                                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            @error('rol_diagnostico')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Reporta a:</label>
                            <select wire:model="reporta_a" class="form-control">
                                <option value="">Seleccione ...</option>
                                @foreach($puestos as $item)
                                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                            @error('reporta_a')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                        <div class="mt-4">
                            <button class="btn btn-success" wire:click="save">Guardar</button>
                            <a href="{{ route('asignaciondiagnosticos.index') }}" class="btn btn-danger">Volver</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
