<div>
    <div class="container">
        <div class="card">
            <div class="card-body">
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
                                <th wire:click="order('nombre')" class="col-2">
                                    Nombre
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
                                <th wire:click="order('resena')">
                                    Reseña
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
                            @foreach ($instructores as $instructore)

                                <tr>
                                    <td>{{ $instructore->id }}</td>
                                    <td>{{ $instructore->user->name }}</td>
                                    <td>{{ $instructore->resena }}</td>
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
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#exampleModal"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header d-block">
                                    <button type="button" class="btn-close float-right" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <h5 class="modal-title text-center" id="exampleModalLabel">¿Esta seguro de eliminar
                                        este
                                        instructor?</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('instructores.destroy', $instructore) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-success btn-sm ">Aceptar</button>
                                        <button type="button" class="btn btn-danger btn-sm "
                                            data-bs-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="card-body">
                        <strong>No existe ningún registro coincidente</strong>
                    </div>
                @endif

                <nav aria-label="Page navigation example" class="float-right">
                    <ul class="pagination">
                        <li class="page-item">

                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>

</div>
