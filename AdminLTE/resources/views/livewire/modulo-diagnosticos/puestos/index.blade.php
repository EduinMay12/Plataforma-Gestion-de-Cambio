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
                        <a href="{{ route('puestos.create') }}" class="btn btn-primary">
                            Agregar Competencias Puesto
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <input class="form-control me-2" type="search" placeholder="Buscar" type="text"
                            aria-label="Search" wire:model="search">
                    </div>
                    <div class="col-4">
                        <a target="_blank" class="btn btn-info" href="{{ route('puestos-competencias.pdf')}}">
                            Descargar reporte general
                            <i class="fas fa-file-download"></i>
                        </a>
                    </div>
                </div>
                
                @if ($puestos->count())

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
                                <th wire:click="order('nombre')" class="col-3">
                                    Puesto
                                    {{-- Sort --}}
                                    @if ($sort == 'nombre')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>

                                <th wire:click="order('descripcion')" class="col-3">
                                    Descripción
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

                                <th wire:click="order('reporta_a')" class="col-3">
                                    Reporta_a
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

                                <th wire:click="order('estatus')" class="col-3">
                                    Estatus
                                    {{-- Sort --}}
                                    @if ($sort == 'estatus')
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
                            @foreach ($puestos as $puesto)

                                <tr>
                                    <td>{{ $puesto->id }}</td>
                                    <td>{{ $puesto->nombre }}</td>
                                    <td>{{ $puesto->descripcion }}</td>
                                    <td>{{ $puesto->reporta_a }}</td>
                                    @if ($puesto->estatus == 2)
                                    <td>Inactivo</td>
                                    @elseif($puesto->estatus == 1)
                                    <td>Activo</td>
                                    @endif

                                    <td>
                                        <a href="{{ route('puestos.show', $puesto) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('puestos.edit', $puesto) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                            wire:click="$emit('deletePuesto', {{ $puesto }})">
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
                            {{ $puestos->links() }}
                        </li>
                    </ul>
                </nav>

                <div class="mt-3">
                    <p> Mostrando {{ $puestos->firstItem() }} a {{ $puestos->lastItem() }} de {{ $puestos->total() }} Entradas</p>
                </div>
            </div>
        </div>

    </div>

</div>

