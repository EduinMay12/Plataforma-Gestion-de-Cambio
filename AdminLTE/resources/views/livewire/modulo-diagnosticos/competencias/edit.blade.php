<div>
    <div class="container">
        <div class="card">
            <div class="card-body row">
                <div class="col-12">

                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" wire:model="nombre">

                        @error('nombre')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Descripción:</label>
                        <input class="form-control" wire:model="descripcion">

                        @error('descripcion')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

<center><h1>Nivel Básico</h1></center>
                    <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta1_ba">Acción Corta 1*: </label>
                            <input type="text" class="form-control" wire:model="accionCorta1_ba"><br>
                            
                        @error('accionCorta1_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta2_ba">Acción Corta 2*: </label>
                            <input type="text" class="form-control" wire:model="accionCorta2_ba"><br>
                        
                            @error('accionCorta2_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionCorta3_ba">Acción Corta 3*: </label>
                            <input type="text" class="form-control" wire:model="accionCorta3_ba"><br>
                        
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
                            {{--<input type="text" class="form-control" wire:model="accionLarga1_ba"><br>--}}
                            <textarea wire:model="accionLarga1_ba" rows="2" class="form-control"></textarea>
                        @error('accionLarga1_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionLarga2_ba">Acción Larga 2: </label>
                            {{--<input type="text" class="form-control" wire:model="accionLarga2_ba"><br>--}}
                            <textarea wire:model="accionLarga2_ba" rows="2" class="form-control"></textarea>
                        
                        @error('accionLarga2_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="accionLarga3_ba">Acción Larga 3: </label>
                            {{--<input type="text" class="form-control" wire:model="accionLarga3_ba"><br>--}}
                            <textarea wire:model="accionLarga3_ba" rows="2" class="form-control"></textarea>
                        @error('accionLarga3_ba')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </div>

<center><h1>Nivel Calificado</h1></center>
                <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta1_ca">Acción Corta 1*: </label>
                        <input type="text" class="form-control" wire:model="accionCorta1_ca"><br>
                        
                    @error('accionCorta1_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta2_ca">Acción Corta 2*: </label>
                        <input type="text" class="form-control" wire:model="accionCorta2_ca"><br>
                    
                        @error('accionCorta2_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionCorta3_ca">Acción Corta 3*: </label>
                        <input type="text" class="form-control" wire:model="accionCorta3_ca"><br>
                    
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
                        {{--<input type="text" class="form-control" wire:model="accionLarga1_ca"><br>--}}
                        <textarea wire:model="accionLarga1_ca" rows="2" class="form-control"></textarea>
                    @error('accionLarga1_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionLarga2_ca">Acción Larga 2: </label>
                        {{--<input type="text" class="form-control" wire:model="accionLarga2_ca"><br>--}}
                        <textarea wire:model="accionLarga2_ca" rows="2" class="form-control"></textarea>
                    @error('accionLarga2_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="accionLarga3_ca">Acción Larga 3: </label>
                        {{--<input type="text" class="form-control" wire:model="accionLarga3_ca"><br>--}}
                        <textarea wire:model="accionLarga3_ca" rows="2" class="form-control"></textarea>
                    @error('accionLarga3_ca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
            </div>

<center><h1>Nivel Experimentado</h1></center>
            <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta1_ex">Acción Corta 1*: </label>
                    <input type="text" class="form-control" wire:model="accionCorta1_ex"><br>
                    
                @error('accionCorta1_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta2_ex">Acción Corta 2*: </label>
                    <input type="text" class="form-control" wire:model="accionCorta2_ex"><br>
                
                    @error('accionCorta2_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionCorta3_ex">Acción Corta 3*: </label>
                    <input type="text" class="form-control" wire:model="accionCorta3_ex"><br>
                
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
                    {{--<input type="text" class="form-control" wire:model="accionLarga1_ex"><br>--}}
                    <textarea wire:model="accionLarga1_ex" rows="2" class="form-control"></textarea>
                @error('accionLarga1_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionLarga2_ex">Acción Larga 2: </label>
                    {{--<input type="text" class="form-control" wire:model="accionLarga2_ex"><br>--}}
                    <textarea wire:model="accionLarga2_ex" rows="2" class="form-control"></textarea>
                @error('accionLarga2_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="accionLarga3_ex">Acción Larga 3: </label>
                    {{--<input type="text" class="form-control" wire:model="accionLarga3_ex"><br>--}}
                    <textarea wire:model="accionLarga3_ex" rows="2" class="form-control"></textarea>
                @error('accionLarga3_ex')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            </div>
        </div>

        <label for="estatus">Estatus:</label>
        <select wire:model="estatus" class="form-control col-md-4">
            <option value="">Seleccione...</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>
        </select>

        @error('estatus')
        <small class="text-danger">{{ $message }}</small>
    @enderror


                    <div class="mt-4">
                        <button class="btn btn-success" wire:click="save" wire:loading.attr="disabled" wire:target="save">Actualizar</button>
                        <a href="{{ route('competencias.index') }}" class="btn btn-danger">Volver</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
