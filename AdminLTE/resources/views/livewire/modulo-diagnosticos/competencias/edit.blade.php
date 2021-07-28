<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-12">

                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" wire:model="competencia.nombre">

                        @error('competencia.nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <h1>Nivel Básico</h1>
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta1_ba">Acción Corta 1*: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionCorta1_ba"><br>
                            
                        @error('accionCorta1_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta2_ba">Acción Corta 2*: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionCorta2_ba"><br>
                        
                            @error('accionCorta2_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta3_ba">Acción Corta 3*: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionCorta3_ba"><br>
                        
                            @error('accionCorta3_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionLarga1_ba">Acción Larga 1: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionLarga1_ba"><br>
                        
                        @error('accionLarga1_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionLarga2_ba">Acción Larga 2: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionLarga2_ba"><br>
                        
                        @error('accionLarga2_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionLarga3_ba">Acción Larga 3: </label>
                            <input type="text" class="form-control" wire:model="competencia.accionLarga3_ba"><br>
                        
                        @error('accionLarga3_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>

                <h1>Nivel Calificado</h1>
                <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta1_ca">Acción Corta 1*: </label>
                        <input type="text" class="form-control" wire:model="competenciaaccionCorta1_ca"><br>
                        
                    @error('accionCorta1_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta2_ca">Acción Corta 2*: </label>
                        <input type="text" class="form-control" wire:model="competenciaaccionCorta2_ca"><br>
                    
                        @error('accionCorta2_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta3_ca">Acción Corta 3*: </label>
                        <input type="text" class="form-control" wire:model="competenciaaccionCorta3_ca"><br>
                    
                        @error('accionCorta3_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionLarga1_ca">Acción Larga 1: </label>
                        <input type="text" class="form-control" wire:model="competencia.accionLarga1_ca"><br>
                    
                    @error('accionLarga1_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionLarga2_ca">Acción Larga 2: </label>
                        <input type="text" class="form-control" wire:model="competencia.accionLarga2_ca"><br>
                    
                    @error('accionLarga2_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionLarga3_ca">Acción Larga 3: </label>
                        <input type="text" class="form-control" wire:model="competencia.accionLarga3_ca"><br>
                    
                    @error('accionLarga3_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
            </div>

            <h1>Nivel Experimentado</h1>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta1_ex">Acción Corta 1*: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionCorta1_ex"><br>
                    
                @error('accionCorta1_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta2_ex">Acción Corta 2*: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionCorta2_ex"><br>
                
                    @error('accionCorta2_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta3_ex">Acción Corta 3*: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionCorta3_ex"><br>
                
                    @error('accionCorta3_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionLarga1_ex">Acción Larga 1: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionLarga1_ex"><br>
                
                @error('accionLarga1_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionLarga2_ex">Acción Larga 2: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionLarga2_ex"><br>
                
                @error('accionLarga2_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionLarga3_ex">Acción Larga 3: </label>
                    <input type="text" class="form-control" wire:model="competencia.accionLarga3_ex"><br>
                
                @error('accionLarga3_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
        </div>

        <label for="estatus">Estatus:</label>
        <select wire:model="competencia.estatus" class="form-control col-md-4">
            <option value="">Seleccione...</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>


                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Guardar</button>
                        <a href="{{ route('competencias.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
