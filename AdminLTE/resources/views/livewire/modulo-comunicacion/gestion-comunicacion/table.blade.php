    @can('crear-comunicacion')
    <div class="text-center">
        <a wire:click="create"  class="btn btn-primary">Agregar Categoria <i class="fas fa-plus"></i></a>
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
            <div class="table-responsive mb-4"><br>
                <table class="table table-bordered table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                    @if($comunicacions->count())
                    <thead>
                        <tr class="table-primary ">
                            <th  scope="col">No.</th>
                            <th scope="col" wire:click="order('comunicacion')">
                                Nombre
                                {{-- Sort --}}
                                @if ($sort == 'comunicacion')
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
                            <th scope="col">Imagen</th>
                            <th scope="col">Estado</th>
                            @can('ver-comunicacion')
                            <th scope="col">Ver</th>
                            @endcan
                            @can('editar-comunicacion')
                            <th scope="col">Editar</th>
                            @endcan
                            @can('eliminar-comunicacion')
                            <th scope="col">Eliminar</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comunicacions as $comunicacion)
                            <tr>
                                <td scope="row">{{ $comunicacion->id }}</td>
                                <td>{{ $comunicacion->name }}</td>
                                <td>{{ $comunicacion->descripcion }}</td>
                                <td>
                                    <center>
                                        <img width="50" height="50" src="{{ Storage::url($comunicacion->imagen) }}">
                                    </center>
                                </td>
                                @if ($comunicacion->status == 0)
                                 <td><center><span class="badge badge-pill badge-danger">Inactivo</span></center></td>
                                @elseif($comunicacion->status == 1)
                                <td><center><span class="badge badge-pill badge-success">Activo</span></center></td>
                                @endif
                                @can('ver-comunicacion')
                                <td width="80">
                                    <button  wire:click="show({{ $comunicacion->id }})" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                                @endcan
                                @can('editar-comunicacion')
                                <td width="80">
                                    <button wire:click="edit({{ $comunicacion->id }})" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                                @endcan
                                @can('eliminar-comunicacion')
                                <td width="80">
                                    <button class="btn btn-danger btn-sm" wire:click="$emit('deleteComunicacion', {{ $comunicacion }})">
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
                        {{$comunicacions->links() }}
                    </li>
                </ul>
            </nav>
            <div class="mt-3">
                <p>Mostrar {{$comunicacions->firstItem()}} a {{$comunicacions->lastItem()}} de {{$comunicacions->total()}}</p>
            </div>
        </div>
    </div>

