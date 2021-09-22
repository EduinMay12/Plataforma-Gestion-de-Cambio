

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
            <button wire:click="create" class="btn btn-primary">
                Agregar Asignación de Cuestionario
            <i class="fas fa-plus"></i></button>
        </div>

        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                wire:model="search">
        </div>

        <div class="col-4">
            <a target="_blank" class="btn btn-info" href="{{ route('preguntas-abiertas.pdf')}}">
                Descargar reporte general
                <i class="fas fa-file-download"></i>
            </a>
        </div>

    </div>

    @if ($asignacioncuestionariosabiertos->count())

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
                    <th wire:click="order('name')" class="col-2">
                        Participante
                        {{-- Sort --}}
                        @if ($sort == 'name')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th wire:click="order('cuestionario_id')">
                        Cuestionario preg. Abiertas
                        {{-- Sort --}}
                        @if ($sort == 'cuestionario_id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th wire:click="order('fecha_asignada')">
                        Fecha Asignada
                        {{-- Sort --}}
                        @if ($sort == 'fecha_asignada')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                    <th wire:click="order('fecha_limite')">
                        Fecha Limite
                        {{-- Sort --}}
                        @if ($sort == 'fecha_limite')
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
                @foreach ($asignacioncuestionariosabiertos as $asignacioncuestionario)

                    <tr>
                        <td>{{ $asignacioncuestionario->id }}</td>
                        <td>{{ $asignacioncuestionario->name }}</td>
                        <td>{{ $asignacioncuestionario->cuestionario->nombre }}</td>
                        <td>{{ $asignacioncuestionario->fecha_asignada }}</td>
                        <td>{{ $asignacioncuestionario->fecha_limite }}</td>
                        

                        <td>
                            <button wire:click="show({{ $asignacioncuestionario->id }})" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <button wire:click="edit({{ $asignacioncuestionario->id }}, {{ $asignacioncuestionario->id }})"
                                class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>

                        </td>
                        <td>
                            <button wire:click="$emit('deleteAsignacioncuestionario', {{ $asignacioncuestionario->id }})"
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
                {{ $asignacioncuestionariosabiertos->links() }}
            </li>
        </ul>
    </nav>

    <div class="mt-3">
        <p> Mostrando {{ $asignacioncuestionariosabiertos->firstItem() }} a {{ $asignacioncuestionariosabiertos->lastItem() }} de {{ $asignacioncuestionariosabiertos->total() }} Entradas</p>
    </div>

