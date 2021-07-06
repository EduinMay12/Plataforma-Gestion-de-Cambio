<div>
    <div class="card-body">
        <div class="row mt-2">
            <div class="col-4">
                <span>Mostrar</span>
                <select wire:model="cant" class="form" aria-label="Default select example">
                    <option value="8">8</option>
                    <option value="24">24</option>
                    <option value="52">52</option>
                    <option value="100">100</option>
                </select>
                <span>Entradas</span>
            </div>
            <div class="col-4">
                @can('crear-etiqueta')
                <a href="{{ route('users.create') }}" class="btn btn-primary btn-rounded" title="Agregar nuevo Usuario">Nuevo Usuario <i class="fa fa-plus"></i></a>
                @endcan
            </div>
            <div class="col-4">
                <input class="form-control me-2" type="search" placeholder="Buscar" type="text" aria-label="Search" wire:model="search">
            </div>
        </div><br>
        @if ($users->count())
        <div class="row">
            @foreach ($users as $user)
            <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="clearfix"></div>
                        <div class="mb-4">
                            <img src="../uploads/avatars/{{ $user->avatar }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        </div>
                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">
                            {{ $user->name }}
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <span class="badge badge-success">{{ $v }}</span>
                                @endforeach
                            @endif
                        </a></h5>
                        <p class="text-muted mb-2">{{ $user->email }}</p>
                    </div>
                    <div class="btn-group" role="group">
                        @can('editar-usuarios')
                        <button type="button" class="btn btn-outline text-truncate"><a href="{{ route('users.edit',$user->id) }}"><i class="fa fa-edit"></i></a></button>
                        @endcan
                        @can('ver-usuarios')
                        <button type="button" class="btn btn-outline text-truncate"><a href="{{ route('users.show',$user->id) }}"><i class="fa fa-eye"></i></a></button>
                        @endcan
                        @can('eliminar-usuarios')
                        <form method="POST" action="{{ route('users.destroy', $user) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-light btn-danger text-truncate" onclick="return confirm(&quot;Confirmar Para Eliminar &quot;)"><i class="fa fa-trash"></i></button>
                        </form>
                        @endcan
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
                <div class="table-responsive mb-4"><br>
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


