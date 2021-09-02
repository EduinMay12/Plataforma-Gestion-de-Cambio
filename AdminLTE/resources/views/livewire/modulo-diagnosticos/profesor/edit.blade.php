<div class="col-12">

    @include('livewire.modulo-diagnosticos.profesor.form')

    <div class="mt-4">
        <button wire:click="update" wire:loading.attr="disabled" wire:target="update" class="btn btn-success">Actualizar</button>
        <button wire:click="table({{ $profesor->id }})" class="btn btn-danger">Volver</button>
    </div>

    <br>

  <form>
        <div class="row">
            <div class="col-6">
                <label for="">Alumnos:</label>
                <select wire:model="alumno_id" class="form-control"> 
                    <option value="">Seleccione...</option>
                    @foreach($estudiantes as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                   @endforeach
                </select>

                @error('alumno_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>  

            {{--<div class="col-4">
                    <div class="form-check form-check-inline position-bottom">
                        <input class="form-check-input" type="radio" wire:model="nivel" value="nivel">
                        <label class="form-check-label" for="inlineRadio1">Básico</label>
                    </div>

                @error('nivel')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div> --}}
            <div class="col-2">
                <br>
                <button class="btn btn-success" wire:click="insertar({{ $profesor->id }})" type="button">Agregar</button>
            </div>
        </div>
    </form>

    <br>
    <div class="row">
        <div class="col-6">
            <table class="table table-bordered">
                <thead>
                    <tr class="th-color">
                        <th>No.</th>
                        <th>Alumno</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($profesor->alumnos as $pro) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pro->nombre}}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="eliminar({{ $pro->id }}, {{ $profesor->id }})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
