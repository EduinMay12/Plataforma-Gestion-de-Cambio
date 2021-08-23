<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
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
                        <a href="{{ route('asignaciondiagnosticos.create') }}" class="btn btn-primary">
                            Agregar Asignación diagnóstico
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <input class="form-control me-2" type="search" placeholder="Buscar" type="text"
                            aria-label="Search" wire:model="search">
                    </div>
                </div>
                @if ($asignaciondiagnosticos->count())

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

                                <th wire:click="order('user_id')" class="col-1">
                                    Participante
                                    {{-- Sort --}}
                                    @if ($sort == 'user_id')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th wire:click="order('puesto_actual')" class="col-1">
                                    Puesto actual
                                    {{-- Sort --}}
                                    @if ($sort == 'puesto_actual')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th wire:click="order('puesto_futuro')" class="col-1">
                                    Puesto futuro
                                    {{-- Sort --}}
                                    @if ($sort == 'puesto_futuro')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th wire:click="order('Evaluador')" class="col-1">
                                    Evaluador
                                    {{-- Sort --}}
                                    @if ($sort == 'Evaluador')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th wire:click="order('rol_diagnostico_id')" class="col-1">
                                    Rol Evaluación
                                    {{-- Sort --}}
                                    @if ($sort == 'rol_diagnostico_id')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th wire:click="order('reporta_a')" class="col-1">
                                    Reporta a
                                    {{-- Sort --}}
                                    @if ($sort == 'reporta_a')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif

                                </th>

                                <th class="col-1">Ver</th>
                                <th class="col-1">Editar</th>
                                <th class="col-1">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asignaciondiagnosticos as $asignaciondiagnostico)

                                <tr>
                                    <td>{{ $asignaciondiagnostico->id }}</td>
                                    <td>{{ $asignaciondiagnostico->user->name }}</td>
                                    <td>{{ $asignaciondiagnostico->puesto_actual }}</td>
                                    <td>{{ $asignaciondiagnostico->puesto_futuro }}</td>
                                    <td>{{ $asignaciondiagnostico->evaluador }}</td>
                                    
                                    <td>{{ $asignaciondiagnostico->rol_diagnostico }}</td>
                                    <td>{{ $asignaciondiagnostico->reporta_a }}</td>

                                    <td>
                                        <a href="{{ route('asignaciondiagnosticos.show', $asignaciondiagnostico) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('asignaciondiagnosticos.edit', $asignaciondiagnostico) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                            wire:click="$emit('deleteAsignaciondiagnostico', {{ $asignaciondiagnostico }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
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
                <br>
                <nav aria-label="Page navigation example" class="float-right">
                    <ul class="pagination">
                        <li class="page-item">
                            {{ $asignaciondiagnosticos->links() }}
                        </li>
                    </ul>
                </nav>
                <div class="mt-3">
                    <p> Mostrando {{ $asignaciondiagnosticos->firstItem() }} a {{ $asignaciondiagnosticos->lastItem() }} de {{ $asignaciondiagnosticos->total() }} Entradas</p>
                </div>
            </div>
        </div>

    </div>
</div>

