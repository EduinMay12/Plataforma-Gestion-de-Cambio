<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-4">

                    <span>Mostrar</span>
                    <select wire:model="cant" class="" aria-label="Default select example">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entradas</span>

                </div>
                <div class="col-4">
                    <a href="{{ route('categorias.create') }}" class="btn btn-primary">Agregar Categoria <i
                            class="fas fa-plus"></i></a>
                </div>
                <div class="col-4">
                    <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                        wire:model="search">
                </div>
            </div>
            @if ($categorias->count())

                <table class="table table-bordered mt-4 table-responsive">
                    <thead>
                        <tr class="table-primary ">
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
                            <th wire:click="order('descripcion')" class="col-3">
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
                            <th class="col-2" class="col-2">Imagen</th>

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

                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)

                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->nombre }}</td>
                                <td>{{ $categoria->descripcion }}</td>
                                <td>
                                    <img width="50" height="50" src="{{ Storage::url($categoria->imagen) }}">
                                </td>
                                @if ($categoria->status == 0)
                                    <td>Inactivo</td>
                                @elseif($categoria->status == 1)
                                    <td>Activo</td>
                                @endif

                                <td>
                                    <a href="{{ route('categorias.show', $categoria) }}"
                                        class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('categorias.edit', $categoria) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm"
                                        wire:click="$emit('deleteCategoria', {{ $categoria }})">
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
                            {{ $categorias->links() }}
                        </li>
                    </ul>
                </nav>
    
                <div class="mt-3">
                    <p> Mostrando {{$categorias->firstItem()}} a {{$categorias->lastItem()}} de {{$categorias->total()}} Entradas</p>
                </div>

            @else
                <div class="card-body">
                    <strong>No existe ningún registro</strong>
                </div>
            @endif

        </div>
    </div>

</div>
