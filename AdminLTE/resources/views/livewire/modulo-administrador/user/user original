<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col">
                <form class="needs-validation" action="{{ route('users.create') }}" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="validationEmpresa">Seleccionar Empresa *</label>
                                <select class="form-control" type="text" name="empresa_id" id="validationEmpresa" required>
                                    <option value="">Seleccionar</option>
                                    @foreach ($empresa as $empresa)
                                        <option value="{{ $empresa->id }}">
                                            {{ $empresa->empresa }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Ingrese el Campo de Empresa.
                                </div>
                                <div class="valid-tooltip">
                                    Listo!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 position-relative">
                                <label class="form-label" for="validationEmpresa">Seleccionar Sucursal *</label>
                                <select class="form-control" type="text" name="empresa_id" id="validationEmpresa" required>
                                    <option value="">Seleccionar</option>
                                    @foreach ($sucursal as $sucursales)
                                        <option value="{{ $sucursales->id }}">
                                            {{ $sucursales->sucursal }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Ingrese el Campo de Sucursal.
                                </div>
                                <div class="valid-tooltip">
                                    Listo!
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row mt-2">
                    <div class="col-4">
                        <span >Mostrar</span>
                        <select wire:model="cant" class="form" aria-label="Default select example">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <span>Entradas</span>
                    </div>
                    <div class="col-4">
                        <Button type="submit" class="btn btn-primary btn-rounded">Agregar Personal <i class="fas fa-plus"></i></Button>
                    </div>
                </form>
                    <div class="col-4">
                        <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search" wire:model="search">
                    </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive mb-4"><br>
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            @if ($users->count())
                            <thead>
                                <tr class="table-primary">
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th wire:click="order('name')">
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
                                    <th wire:click="order('apellido')">
                                        Apellido
                                        {{-- Sort --}}
                                        @if ($sort == 'apellido')
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
                                        Empresa/Sucursal
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
                                    <th>Tipo</th>
                                    <th>Puesto</th>
                                    <th wire:click="order('empresa')">
                                        Guia 1
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
                                    <th wire:click="order('empresa')">
                                        Guia 2
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
                                    <th wire:click="order('estatus')">
                                        Estado
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
                                    @can('ver-usuarios')
                                    <th>Ver</th>
                                    @endcan
                                    @can('editar-usuarios')
                                    <th>Editar</th>
                                    @endcan
                                    @can('eliminar-usuarios')
                                    <th>Eliminar</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td><img src="../uploads/avatars/{{ $user->avatar }}" width="30" height="30" class="rounded-circle"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->apellido }}</td>
                                    <td>{{ $user->empresa }}/{{ $user->sucursal }}</td>
                                    <td>
                                        @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                                <span class="badge badge-primary">{{ $v }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        @if ($user->estatus == 0)
                                        <td class="text-danger"> Necesita Ayuda</td>
                                            @elseif($user->estatus == 1)
                                        <td class="text-warning"> Pendiente</td>
                                            @elseif($user->estatus == 2)
                                        <td class="text-success"> Evaluado</td>
                                            @endif
                                    </>
                                    @can('ver-usuarios')
                                    <td width="50"><a class="btn btn-primary btn-sm" href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    @endcan
                                    @can('editar-usuarios')
                                    <td width="50"><a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                    @endcan
                                    @can('eliminar-usuarios')
                                    <td width="50">
                                        <button class="btn btn-danger btn-sm" wire:click="$emit('deleteUsers', {{ $user }})">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
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
                                {{ $users->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


