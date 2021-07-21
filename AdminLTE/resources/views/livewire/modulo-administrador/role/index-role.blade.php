<div class="container">
    <div class="card">
        <div class="card-body">
            @can('crear-etiqueta')
                <center>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-rounded" title="Agregar nuevo Puesto">Nueva Etiqueta <i class="fa fa-plus"></i> </a>
                </center>
            @endcan
            <div class="row mt-2">
                <div class="col-8">
                    <span>Mostrar</span>
                    <select wire:model="cant" class="form" aria-label="Default select example">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entradas</span>
                </div>
                <div class="col-4">
                    <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search"
                        wire:model="search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive mb-4"><br>
                        <table class="table table-bordered datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            @if ($roles->count())
                            <thead>
                                <tr class="table-primary">
                                    <th>No.</th>
                                    <th wire:click="order('name')">
                                        Etiqueta
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
                                    <th>Ver</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                @can('ver-etiqueta')
                                <td width="50"><a class="btn btn-primary btn-sm" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                @endcan
                                @can('editar-etiqueta')
                                <td width="50"><a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                @endcan
                                @can('eliminar-etiqueta')
                                <td width="50"><form method="POST" action="{{ route('roles.destroy', $role) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirmar Para Eliminar &quot;)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                @endcan
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
                                {{ $roles->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
