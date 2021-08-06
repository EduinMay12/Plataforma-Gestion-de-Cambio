    @can('crear-elemento')
    <div class="text-center">
        <a wire:click="create"  class="btn btn-primary">Agregar Elemento <i class="fas fa-plus"></i></a>
    </div>
    @endcan
    <div class="row mt-2">
        <div class="col-8">
            <span>Mostrar</span>
            <select wire:model="cant" class="" aria-label="Default select example">
                <option value="10">10</option>
                <option value="25">25</option>
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
            <div class="table-responsive  mb-4"><br>
                <table class="table table-bordered table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 140%;">
                    @if ($elementos->count())
                    <thead>
                        <tr class="table-primary ">
                            <th scope="col" scope="col">No</th>

                            <th scope="col" wire:click="order('elemento')">
                                Nombre
                                {{-- Sort --}}
                                @if ($sort == 'elemento')
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

                            <th scope="col" wire:click="order('descripcion')">
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

                            <th scope="col" wire:click="order('categoria_id')">
                                Categoria
                                {{-- Sort --}}
                                @if ($sort == 'categoria_id')
                                    @if ($direction == 'asc')
                                        <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif

                                @else
                                    <i class="fas fa-sort float-right mt-1"></i>
                                @endif
                            </th>
                            <th scope="col">contenido</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Estado</th>
                            @can('ver-elemento')
                            <th scope="col">Ver</th>
                            @endcan
                            @can('editar-elemento')
                            <th scope="col">Editar</th>
                            @endcan
                            @can('eliminar-elemento')
                            <th scope="col">Eliminar</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($elementos as $elemento)
                            <tr>
                                <td scope="row">{{ $elemento->id }}</td>
                                <td>{{ $elemento->name }}</td>
                                <td><center><img src="../uploads/avatars/{{ $elemento->user->avatar }}" width="30" height="30" class="rounded-circle"></center></td>
                                <td>{{ $elemento->user->name }} {{ $elemento->user->apellido }}</td>
                                <td>{{ $elemento->descripcion }}</td>
                                <td>{{ $elemento->comunicacion->name }}</td>
                                <td>{{ $elemento->contenido }}</td>
                                <td>
                                    <center>
                                        <img width="50" height="50" src="{{ Storage::url($elemento->imagen) }}">
                                    </center>
                                </td>
                                @if ($elemento->status == 0)
                                <td><center><span class="badge badge-pill badge-danger">Inactivo</span></center></td>
                                @elseif($elemento->status == 1)
                                <td><center><span class="badge badge-pill badge-success">Activo</span></center></td>
                                @endif
                                @can('ver-elemento')
                                <td width="80">
                                    <button wire:click="show({{ $elemento->id }})" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                                @endcan
                                @can('editar-elemento')
                                <td width="80">
                                    <button wire:click="edit({{ $elemento->id }})"  class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                                @endcan
                                @can('eliminar-elemento')
                                <td width="80">
                                    <button class="btn btn-danger btn-sm" wire:click="$emit('deleteElemento', {{ $elemento }})">
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
                        {{$elementos->links() }}
                    </li>
                </ul>
            </nav>
            <div class="mt-3">
                <p>Mostrar {{$elementos->firstItem()}} a {{$elementos->lastItem()}} de {{$elementos->total()}}</p>
            </div>
        </div>
    </div>

