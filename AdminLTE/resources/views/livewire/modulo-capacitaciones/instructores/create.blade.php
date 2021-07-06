<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-6">

                        <div class="form-group">
                            <label for="">Seleccionar Instructor</label>
                            <select class="form-control" wire:model="user_id">
                                <option value="">Seleccione...</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('user_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Reseña:*</label>
                            <textarea class="form-control" rows="10" wire:model="resena"></textarea>

                            @error('resena')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Estatus:*</label><br>
                            <select class="form-control" wire:model="status">
                                <option value="">Seleccione...</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>

                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success" wire:click="save">Guardar</button>
                            <a href="{{ route('instructores.index') }}" class="btn btn-danger">Volver</a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
