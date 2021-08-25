
    <div class="col">
        <div class="row">
            @can('crear-usuarios')
            <div class="col-md-6">
                <div class="mb-3 position-relative">
                    <label class="form-label" for="">Seleccionar Empresa *</label>
                    <select class="form-control" type="text" wire:model="empresa_id" required>
                        <option value="">Seleccione...</option>
                        @foreach ($empresas as $empresa)
                            <option value="{{ $empresa->id }}">
                                {{ $empresa->empresa }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endcan
            @if($empresa_id )

            <div class="col-md-6">
                <div class="mb-3 position-relative">
                    <label class="form-label" for="">Seleccionar Sucursal *</label>
                    <select class="form-control" type="text" wire:model="sucursal_id" required>
                        <option value="">Seleccione...</option>
                        @foreach ($sucursales as $sucursales)
                            <option value="{{ $sucursales->id }}">
                                {{ $sucursales->sucursal }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            @endif
        </div>

        @if ($sucursal_id )
        <center>
            <div class="col-4">
                <Button wire:click="create({{$empresa_id}},{{$sucursal_id}})" class="btn btn-primary btn-rounded">Agregar Personal <i class="fas fa-plus"></i></Button>
            </div>
        </center>
        @endif
    </div>
        <div class="row mt-2">
            <div class="col-8">
                <span >Mostrar</span>
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
        <div class="col-md-12">
            <div class="table-responsive mb-4"><br>
                <table class="table table-striped table-bordered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 170%;">
                    @if ($users->count())
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">No.</th>
                            <th scope="col">Foto</th>
                            <th scope="col" wire:click="order('name')">
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
                            <th scope="col" wire:click="order('apellido')">
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
                            <th scope="col" wire:click="order('empresa')">
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
                            <th scope="col">Role</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Guia. 1</th>
                            <th scope="col">Guia. 2</th>
                            <th scope="col" wire:click="order('estatus')">
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
                            <th scope="col">Ver</th>
                            @endcan
                            @can('editar-usuarios')
                            <th scope="col">Editar</th>
                            @endcan
                            @can('eliminar-usuarios')
                            <th scope="col">Eliminar</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td><img src="../uploads/avatars/{{ $user->avatar }}" width="30" height="30" class="rounded-circle"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->apellido }}</td>
                            <td> <span class="badge badge-pill badge-light">{{ $user->empresa }}</span>/<span class="badge badge-pill badge-light">{{ $user->sucursal }} </span> </td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $role)
                                        <center><span class="badge badge-pill badge-primary">{{ $role }}</span></center>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{ $user->tipo }}</td>
                            <td>{{ $user->puesto_actual_id }}</td>
                            <td><center><span class="badge badge-pill badge-success"> Finalizar </span></center></td>
                            <td><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></td>
                            <td>
                                @if ($user->estatus == 0)
                                <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                                    @elseif($user->estatus == 1)
                                <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                                    @elseif($user->estatus == 2)
                                <span><center><span class="badge badge-pill badge-info"> Evaluador </span></center></span>
                                    @elseif($user->estatus == 3)
                                <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                                    @elseif($user->estatus == 4)
                                <span><center><span class="badge badge-pill badge-info"> Participante </span></center></span>
                                @endif
                            </td>
                            @can('ver-usuarios')
                            <td width="50">
                                <a class="btn btn-primary btn-sm" href="{{ route('users.show',$user->id) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                            @endcan
                            @can('editar-usuarios')
                            <td width="50">
                                <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                </a>
                            </td>
                            @endcan
                            @can('eliminar-usuarios')
                            <td width="50">
                                <a class="btn btn-danger btn-sm" wire:click="$emit('deleteUsers', {{ $user }})">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
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
            <div class="mt-3">
                <p>Mostrar {{$users->firstItem()}} a {{$users->lastItem()}} de {{$users->total()}}</p>
            </div>
        </div>
    </div>


