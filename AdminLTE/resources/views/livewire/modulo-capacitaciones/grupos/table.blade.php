<div class="row">

    <div class="col-4 mb-4">
        <label for="">Seleccionar categoria</label>
        <select wire:model="categoria_id" class="form-select form-control">
            <option value="">Seleccione...</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <label for="">Seleccionar curso</label>
        <select wire:model="curso_id" class="form-select form-control">
            <option value="">Seleccione...</option>
            @if ($cursos->count())
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            @else
                <option value="">No hay registros</option>
            @endif

        </select>
    </div>

</div>

@if ($curso_id)

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
        <button wire:click="create({{$categoria_id}}, {{$curso_id}})" class="btn btn-primary">Agregar grupo <i class="fas fa-plus"></i></button>
    </div>

    <div class="col-4">
        <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
            wire:model="search">
    </div>

</div>

@if ($grupos->count())

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
                <th wire:click="order('descorta')">
                    Fecha Inicio
                    {{-- Sort --}}
                    @if ($sort == 'descorta')
                        @if ($direction == 'asc')
                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                        @else
                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                        @endif

                    @else
                        <i class="fas fa-sort float-right mt-1"></i>
                    @endif
                </th>
                <th class="col-2">Fecha Fin</th>

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
            @foreach ($grupos as $grupo)

                <tr>
                    <td>{{ $grupo->id }}</td>
                    <td>{{ $grupo->nombre }}</td>
                    <td>{{ $grupo->descorta }}</td>
                    <td><img width="50" height="50" src="{{ Storage::url($grupo->imagen) }}"></td>
                    @if ($grupo->status == 0)
                        <td>Inactivo</td>
                    @elseif($grupo->status == 1)
                        <td>Activo</td>
                    @endif

                    <td>
                        <button wire:click="show({{$grupo->id}})" class="btn btn-primary btn-sm">
                            <i class="fas fa-eye"></i>
                        </button>
                    </td>
                    <td>
                        <button wire:click="" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i>
                        </button>

                    </td>
                    <td>
                        <button wire:click="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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
