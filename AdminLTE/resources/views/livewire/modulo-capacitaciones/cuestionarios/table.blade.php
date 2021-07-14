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
        <button wire:click="create" class="btn btn-primary">
            Agregar Cuestionario
            <i class="fas fa-plus"></i>
        </button>
    </div>
    <div class="col-4">
        <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
            wire:model="search">
    </div>
</div>
@if ($cuestionarios->count())

    <table class="table table-bordered mt-4">
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
            @foreach ($cuestionarios as $cuestionario)

                <tr>
                    <td>{{ $cuestionario->id }}</td>
                    <td>{{ $cuestionario->nombre }}</td>
                    <td>{{ $cuestionario->descripcion }}</td>

                    @if ($cuestionario->status == 0)
                        <td>Inactivo</td>
                    @elseif($cuestionario->status == 1)
                        <td>Activo</td>
                    @endif

                    <td>
                        <button wire:click="show({{ $cuestionario->id }})" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i>
                        </button>
                    </td>
                    <td>
                        <button wire:click="edit({{ $cuestionario->id }})" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-sm"
                            wire:click="$emit('deleteCuestionario', {{ $cuestionario->id }})">
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

<nav aria-label="Page navigation example" class="float-right">
    <ul class="pagination">
        <li class="page-item">
            
        </li>
    </ul>
</nav>
