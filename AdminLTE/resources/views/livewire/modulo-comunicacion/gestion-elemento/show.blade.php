<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body btn btn-secondary">
               <center> <img height="95%" width="100%" class="mb-3 position-relative" src="{{ Storage::url($elemento->imagen) }}"></center>
            </div>
        </div>
    </div>
    <div class="col-6">
        <iframe height="95%" width="100%" src="{{ $elemento->url }}" title="Ducumento" allowfullscreen></iframe>
    </div>
</div>

<div class="table-responsive">
    <h5>Datos del Elemento No.{{ $elemento->id }}</h5>
    <table class="table table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
        <thead>
            <tr class="table-primary">
                <th scope="col">Foto</th>
                <th scope="col">Datos</th>
                <th scope="col">Categoria</th>
                <th scope="col">Detalles</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">
                    <center>
                    <img src="../uploads/avatars/{{ $elemento->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                    @if(!empty($elemento->user->getRoleNames()))
                        @foreach($elemento->user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $elemento->user->name }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $elemento->user->apellido }}</span><br>
                </td>

                <td scope="row">
                    <label for="">Categoria : </label>
                    <span>{{ $elemento->comunicacion->name }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Descripcion : </label>
                    <span>{{ $elemento->descripcion }}</span><br>

                    <label for="">Dirigido a : </label>
                    <span>{{ $elemento->dirigido }}</span><br>

                    <label for="">Contenido : </label>
                    <span>{{ $elemento->contenido }}</span><br>

                    <label for="">Link : </label>
                    <a href="{{ $elemento->url }}">{{ $elemento->url }}</a><br>
                </td>

                <td scope="row">
                    @if ($elemento->status == 1)
                    <span class="badge badge-pill badge-success">Activo</span><br>
                    @elseif($elemento->status == 0)
                    <span class="badge badge-pill badge-danger">Inactivo</span><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="table-responsive">
    <h5>Datos de la Categoria de la Comunicación No.{{ $elemento->comunicacion->id }}</h5>
    <table class="table table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
        <thead>
            <tr class="table-primary">
                <th scope="col">Imagen de la Categoria</th>
                <th scope="col">Categoria</th>
                <th scope="col">Detalles</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <center> <img class="col-6" src="{{ Storage::url($elemento->comunicacion->imagen) }}"></center>
                </td>
                <td scope="row">
                    <label for="">Categoria : </label>
                    <span>{{ $elemento->comunicacion->name }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Descripcion : </label>
                    <span>{{ $elemento->comunicacion->descripcion }}</span><br>
                </td>

                <td scope="row">
                    @if ($elemento->status == 1)
                    <span class="badge badge-pill badge-success">Activo</span><br>
                    @elseif($elemento->status == 0)
                    <span class="badge badge-pill badge-danger">Inactivo</span><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="table-responsive">
    <h5>Datos del Empleado No.{{ $elemento->user->id }}</h5>
    <table class="table table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
        <thead>
            <tr class="table-primary">
                <th scope="col">Foto</th>
                <th scope="col">Datos</th>
                <th scope="col">Direccion y Estado</th>
                <th scope="col">Empresa / Sucursal</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">
                    <center>
                    <img src="../uploads/avatars/{{ $elemento->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                    @if(!empty($elemento->user->getRoleNames()))
                        @foreach($elemento->user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $elemento->user->name }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $elemento->user->apellido }}</span><br>

                    <label for="">Correo : </label>
                    <span>{{ $elemento->user->email }}</span><br>

                    <label for="">Tipo : </label>
                    <span>{{ $elemento->user->tipo }}</span><br>

                    <label for="">Puesto : </label>
                    <span>{{ $elemento->user->puesto_actual_id }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Direccion : </label>
                    <span>{{ $elemento->user->direccion }}</span><br>

                    <label for="">Colonia : </label>
                    <span>{{ $elemento->user->d_asenta }}</span><br>

                    <label for="">Ciudad : </label>
                    <span>{{ $elemento->user->d_ciudad }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Sucursal : </label>
                    <span>{{ $elemento->user->sucursal_id }}</span><br>

                    <label for="">Empresa : </label>
                    <span>{{ $elemento->user->empresa_id }}</span><br>
                </td>

                <td scope="row">
                    @if ($elemento->user->estatus == 0)
                    <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                        @elseif($elemento->user->estatus == 1)
                    <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                        @elseif($elemento->user->estatus == 2)
                    <span><center><span class="badge badge-pill badge-info"> Evaluado </span></center></span>
                        @elseif($elemento->user->estatus == 3)
                    <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="/elemento" class="btn btn-danger">Volver</a>
</div>
