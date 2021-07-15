<div class="col-4 mb-4">
    <label for="">Seleccionar cuestionario</label>
    <select wire:model="cuestionario_id" class="form-select form-control">
        <option value="">Seleccione...</option>
        @foreach ($cuestionarios as $cuestionario)
            <option value="{{ $cuestionario->id }}">{{ $cuestionario->nombre }}</option>
        @endforeach
    </select>
</div>

@if ($cuestionario_id)

    <div class="row mt-2">

        <div class="col-4">
            <span>Mostrar</span>
            <select wire:model="cant" class="form-select" aria-label="Default select example">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span>Entradas</span>
        </div>

        <div class="col-4">
            <button wire:click="create({{ $cuestionario_id }})" class="btn btn-primary">Agregar pregunta <i
                    class="fas fa-plus"></i></button>
        </div>

        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                wire:model="search">
        </div>

    </div>

    @if ($preguntas->count())

        <table class="table table-bordered mt-4">
            <thead>
                <tr class="table-primary">
                    <th wire:click="order('id')" class="col-1">
                        No
                        {{-- Sort --}}
                        @if ($sort == 'id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif

                    </th>
                    <th wire:click="order('textPregunta')" class="col-2">
                        Pregunta
                        {{-- Sort --}}
                        @if ($sort == 'textPregunta')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th wire:click="order('descripcion')">
                        Descripcion
                        {{-- Sort --}}
                        @if ($sort == 'descripcion')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>

                    <th wire:click="order('status')" class="col-1">
                        Estado
                        {{-- Sort --}}
                        @if ($sort == 'status')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>

                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($preguntas as $pregunta)

                    <tr>
                        <td>{{ $pregunta->id }}</td>
                        <td>{{ $pregunta->textPregunta }}</td>
                        <td>{{ $pregunta->descripcion }}</td>
                        @if ($pregunta->status == 0)
                            <td>Inactivo</td>
                        @elseif($pregunta->status == 1)
                            <td>Activo</td>
                        @endif

                        <td>
                            <button wire:click="show({{ $pregunta->id }})" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <button wire:click="edit({{ $cuestionario_id }}, {{ $pregunta->id }})"
                                class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                        </td>
                        <td>
                            <button wire:click="$emit('deletePregunta', {{ $pregunta->id }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    @else
        <div class="card-body">
            <strong>No existe ningún registro</strong>
        </div>
    @endif

    <nav aria-label="Page navigation example" class="float-right">
        <ul class="pagination">
            <li class="page-item">

            </li>
        </ul>
    </nav>

@endif
