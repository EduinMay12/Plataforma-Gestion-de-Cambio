<div>
    <div class="row mt-2">
        <div class="col-4">
            <span>Mostrar</span>
            <select wire:model="cant" class="form" aria-label="Default select example">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span>Entradas</span>
        </div>
        <div class="col-4">
            <a href="{{ route('gestionempresa.create') }}" class="btn btn-primary btn-rounded">Agregar Empresa <i class="fas fa-plus"></i></a>
        </div>
        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search" wire:model="search">
        </div>
    </div><br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="table-responsive mb-4"><br>
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            @if ($empresas->count())
                            <thead>
                                <tr class="bg-transparent">
                                    <th wire:click="order('id')">
                                        No.
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
                                    <th wire:click="order('empresa')">
                                        Nombre de la Empresa
                                        {{-- Sort --}}
                                        @if ($sort == 'empresa')
                                            @if ($direction == 'asc')
                                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                            @else
                                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                            @endif

                                        @else
                                            <i class="fas fa-sort float-right mt-1"></i>
                                        @endif

                                    </th>
                                    <th wire:click="order('user_id')">
                                        Resposable
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
                                    <th wire:click="order('empleados')">
                                        No. Empleados
                                        {{-- Sort --}}
                                        @if ($sort == 'empleados')
                                            @if ($direction == 'asc')
                                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                            @else
                                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                            @endif

                                        @else
                                            <i class="fas fa-sort float-right mt-1"></i>
                                        @endif
                                    </th>
                                    <th>Estatus</th>
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empresas as $empresa)
                                <tr>
                                    <td>{{ $empresa->id }}</td>
                                    <td>{{ $empresa->empresa }}</td>
                                    <td>{{ $empresa->user->name  }}</td>
                                    <td>{{ $empresa->empleados }}</td>
                                        @if ($empresa->estatus == 0)
                                    <td class="text-danger">Inactivo</td>
                                        @elseif($empresa->estatus == 1)
                                    <td class="text-success">Activo</td>
                                        @endif
                                    <td width="50">
                                        <a href="{{ route('gestionempresa.edit',$empresa->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    </td>
                                    <td width="50">
                                        <a href="{{ route('gestionempresa.edit',$empresa->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    </td>
                                    <td width="50"><form method="POST" action="{{ route('gestionempresa.destroy', $empresa) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirmar Para Eliminar &quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <div class="card-body">
                                <strong><h4> No existe ningún registro <i class="fa fa-exclamation-circle"></i></h4></strong>
                            </div>
                        @endif
                    </div>
                    <nav aria-label="Page navigation example" class="float-right">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $empresas->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>