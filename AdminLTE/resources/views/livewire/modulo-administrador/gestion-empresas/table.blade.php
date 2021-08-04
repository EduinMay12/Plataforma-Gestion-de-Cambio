    @can('crear-gestion-empresa')
    <center>
        <div class="col-4">
            <button wire:click="create" class="btn btn-primary btn-rounded">Crear Empresa <i class="fas fa-plus"></i></button>
        </div>
    </center>
    @endcan
    <div class="row mt-2">
        <div class="col-8">
            <span>Mostrar</span>
            <select wire:model="cant" class="" aria-label="Default select example">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <span>Entradas</span>
        </div>
        <div class="col-4">
            <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search" wire:model="search">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive mb-4"><br>
                <table class="table table-bordered table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    @if ($empresas->count())
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">No.</th>
                            <th scope="col" wire:click="order('empresa')">
                                Nombre
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
                            <th>Foto</th>
                            <th scope="col" wire:click="order('user_id')">
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
                            <th scope="col" wire:click="order('empleados')">
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
                            <th scope="col">Estatus</th>
                            @can('ver-gestion-empresa')
                            <th scope="col">Ver</th>
                            @endcan
                            @can('editar-gestion-empresa')
                            <th scope="col">Editar</th>
                            @endcan
                            @can('eliminar-gestion-empresa')
                            <th scope="col">Eliminar</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empresas as $empresa)
                        <tr>
                            <td scope="row">{{ $empresa->id }}</td>
                            <td>{{ $empresa->empresa }}</td>
                            <td><center><img src="../uploads/avatars/{{ $empresa->user->avatar }}" width="30" height="30" class="rounded-circle"></center></td>
                            <td> {{ $empresa->user->name  }} {{ $empresa->user->apellido  }}</td>
                            <td> {{ $empresa->empleados }}</td>
                                @if ($empresa->estatus == 0)
                            <td><center><span class="badge badge-pill badge-danger">Inactivo</span></center></td>
                                @elseif($empresa->estatus == 1)
                            <td><center><span class="badge badge-pill badge-success">Activo</span></center></td>
                                @endif
                            @can('ver-gestion-empresa')
                            <td width="50">
                                <button wire:click="show({{ $empresa->id }})" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                            </td>
                            @endcan
                            @can('editar-gestion-empresa')
                            <td width="50">
                                <button wire:click="edit({{ $empresa->id }})" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                            </td>
                            @endcan
                            @can('eliminar-gestion-empresa')
                            <td width="50">
                                <button type="submit" class="btn btn-danger btn-sm" wire:click="$emit('deleteEmpresa', {{ $empresa }})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </td>
                            @endcan
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
            <div class="mt-3">
                <p>Mostrar {{$empresas->firstItem()}} a {{$empresas->lastItem()}} de {{$empresas->total()}}</p>
            </div>
        </div>
    </div>
