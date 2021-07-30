<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row mt-2">
                    <div class="col-4">
                        <span>Mostrar</span>
                        <select wire:model="cant" class="">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span>Entradas</span>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('instructores.create') }}" class="btn btn-primary">
                            Agregar Instructor
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <input class="form-control me-2" type="search" placeholder="Buscar" type="text"
                            aria-label="Search" wire:model="search">
                    </div>
                </div>
                @if ($instructores->count())

                    <table class="table table-bordered mt-4 table-responsive">
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
                                <th wire:click="order('name')" class="col-6">
                                    Nombre
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
                                <th wire:click="order('status')" class="col-2">
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

                                <th class="col-1">Ver</th>
                                <th class="col-1">Editar</th>
                                <th class="col-1">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructores as $instructore)

                                <tr>
                                    <td>{{ $instructore->id }}</td>
                                    <td>{{ $instructore->name }}</td>
                                    @if ($instructore->status == 0)
                                        <td>Inactivo</td>
                                    @elseif($instructore->status == 1)
                                        <td>Activo</td>
                                    @endif

                                    <td>
                                        <a href="{{ route('instructores.show', $instructore) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('instructores.edit', $instructore) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                            wire:click="$emit('deleteInstructore', {{ $instructore }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example" class="float-right mt-2">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $instructores->links() }}
                            </li>
                        </ul>
                    </nav>

                    <div class="mt-3">
                        <p> Mostrando {{ $instructores->firstItem() }} a {{ $instructores->lastItem() }} de {{ $instructores->total() }} Entradas</p>
                    </div>

                @else
                    <div class="card-body">
                        <strong>No existe ningún registro</strong>
                    </div>
                @endif

                
            </div>
        </div>

    </div>

</div>
