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
                        <a href="{{ route('competencias.create') }}" class="btn btn-primary">
                            Agregar Competencia
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <input class="form-control me-2" type="search" placeholder="Buscar" type="text"
                            aria-label="Search" wire:model="search">
                    </div>
                </div>
                @if ($competencias->count())

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

                                <th wire:click="order('accionCorta1_ba')" class="col-3">
                                    Básico(conoce,comprende y ejecuta)
                                    {{-- Sort --}}
                                    @if ($sort == 'accionCorta1_ba')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                
                                <th wire:click="order('accionCorta1_ca')" class="col-3">
                                    Calificado(evalúa,aplica y adapta)
                                    {{-- Sort --}}
                                    @if ($sort == 'accionCorta1_ca')
                                        @if ($direction == 'asc')
                                            <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                        @else
                                            <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                        @endif

                                    @else
                                        <i class="fas fa-sort float-right mt-1"></i>
                                    @endif
                                </th>
                                <th wire:click="order('accionCorta1_ex')" class="col-3">
                                    Experimentado(mejora,enseña y guía)
                                    {{-- Sort --}}
                                    @if ($sort == 'accionCorta1_ex')
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
                            @foreach ($competencias as $competencia)

                                <tr>
                                    <td>{{ $competencia->id }}</td>
                                    <td>{{ $competencia->nombre }}</td>
                                    <td>{{ $competencia->accionCorta1_ba }} <br> {{ $competencia->accionCorta2_ba }} <br> {{ $competencia->accionCorta3_ba }}</td>
                                    <td>{{ $competencia->accionCorta1_ca }} <br> {{ $competencia->accionCorta2_ca }} <br> {{ $competencia->accionCorta3_ca }}</td>
                                    <td>{{ $competencia->accionCorta1_ex }} <br> {{ $competencia->accionCorta2_ex }} <br> {{ $competencia->accionCorta3_ex }}</td>
                                    @if ($competencia->estatus == 2)
                                        <td><b><p style="color: red;">Inactivo</p></b></td>
                                    @elseif($competencia->estatus == 1)
                                        <td><b><p style="color: rgb(32, 187, 79);">Activo</p></b></td>
                                    @endif
                                    <td>
                                        <a href="{{ route('competencias.show', $competencia) }}"
                                            class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('competencias.edit', $competencia) }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                            wire:click="$emit('deleteCompetencia', {{ $competencia }})">
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
                            {{ $competencias->links() }}
                        </li>
                    </ul>
                </nav>

                <div class="mt-3">
                    <p> Mostrando {{ $competencias->firstItem() }} a {{ $competencias->lastItem() }} de {{ $competencias->total() }} Entradas</p>
                </div>
            </div>
        </div>

    </div>

</div>

