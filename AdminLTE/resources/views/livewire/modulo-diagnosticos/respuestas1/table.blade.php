<div class="col-4 mb-4">
    <label for="">Seleccionar Pregunta</label>
    <select wire:model="pregunta_id" class="form-select form-control">
        <option value="">Seleccione...</option>
        @foreach ($preguntas as $pregunta)
            <option value="{{ $pregunta->id }}">{{ $pregunta->textPregunta }}</option>
        @endforeach
    </select>
</div>

@if ($pregunta_id)

    <div class="row mt-2">

        <div class="col-4">
            <span>Mostrar</span>
            <select wire:model="cant" class="form-select" aria-label="Default select example">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <span>Entradas</span>
        </div>

        <div class="col-4">
            <button wire:click="create({{ $pregunta_id }})" class="btn btn-primary">
                Agregar Respuesta <i class="fas fa-plus"></i>
            </button>
        </div>

        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                wire:model="search">
        </div>

    </div>

    @if ($respuestas->count())

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
                    <th wire:click="order('pregunta_id')" class="col-2">
                        Pregunta
                        {{-- Sort --}}
                        @if ($sort == 'pregunta_id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th wire:click="order('textRespuesta')" class="col-2">
                        Respuestas
                        {{-- Sort --}}
                        @if ($sort == 'textRespuesta')
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
                @foreach ($respuestas as $respuesta)

                    <tr>
                        <td>{{ $respuesta->id }}</td>
                        <td>{{ $respuesta->pregunta->textPregunta }}</td>
                        <td>{{ $respuesta->textRespuesta }}</td>


                        <td>
                            <button wire:click="show({{ $respuesta->id }})" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <button wire:click="edit({{ $pregunta_id }}, {{ $respuesta->id }})"
                                class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                        </td>
                        <td>
                            <button wire:click="$emit('deleteRespuesta', {{ $respuesta->id }})"
                                class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table><br>

    @else
        <div class="card-body">
            <strong>No existe ningún registro</strong>
        </div>
    @endif

    <nav aria-label="Page navigation example" class="float-right">
        <ul class="pagination">
            <li class="page-item">
                {{ $respuestas->links() }}
            </li>
        </ul>
    </nav>

    <div class="mt-3">
        <p> Mostrando {{ $respuestas->firstItem() }} a {{ $respuestas->lastItem() }} de {{ $respuestas->total() }} Entradas</p>
    </div>

@endif
