<div class="col-4 mb-4">
    <label for="">Seleccionar curso</label>
    <select wire:model="curso_id" class="form-select form-control">
        <option value="">Seleccione...</option>
        @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
        @endforeach
    </select>
</div>

@if ($curso_id)

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
            <button wire:click="create({{$curso_id}})" class="btn btn-primary">
                Agregar lección 
                <i class="fas fa-plus"></i>
            </button>
        </div>

        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                wire:model="search">
        </div>

    </div>

    @if ($lecciones->count())

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

                    <th wire:click="order('nombre')" class="col-6">
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
                @foreach ($lecciones as $leccione)

                    <tr>
                        <td>{{ $leccione->id }}</td>
                        <td>{{ $leccione->nombre }}</td>
                        @if ($leccione->status == 0)
                            <td>Inactivo</td>
                        @elseif($leccione->status == 1)
                            <td>Activo</td>
                        @endif

                        <td>
                            <button wire:click="show({{$leccione->id}})" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            <button wire:click="edit({{$curso_id}}, {{$leccione->id}})" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                    
                        </td>
                        <td>
                            <button wire:click="$emit('deleteLeccione', {{ $leccione->id }})" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation example" class="float-right mt-2">
            <ul class="pagination">
                <li class="page-item">
                    {{ $lecciones->links() }}
                </li>
            </ul>
        </nav>

        <div class="mt-3">
            <p> Mostrando {{ $lecciones->firstItem() }} a {{ $lecciones->lastItem() }} de {{ $lecciones->total() }} Entradas</p>
        </div>

    @else
        <div class="card-body">
            <strong>No existe ningún registro</strong>
        </div>
    @endif

@endif
