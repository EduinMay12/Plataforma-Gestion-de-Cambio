
<div class="table-responsive">
    <h5>Datos del Elemento Comunicación No.{{ $campaña->elemento->id }}</h5>
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
                    <img src="../uploads/avatars/{{ $campaña->elemento->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                    @if(!empty($campaña->elemento->user->getRoleNames()))
                        @foreach($campaña->elemento->user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $campaña->user->name }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $campaña->elemento->user->apellido }}</span><br>
                </td>

                <td scope="row">
                    <label for="">Categoria : </label>
                    <span>{{ $campaña->elemento->comunicacion->name }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Descripcion : </label>
                    <span>{{ $campaña->elemento->descripcion }}</span><br>

                    <label for="">Dirigido a : </label>
                    <span>{{ $campaña->elemento->dirigido }}</span><br>

                    <label for="">Contenido : </label>
                    <span>{{ $campaña->elemento->contenido }}</span><br>

                    <label for="">Link : </label>
                    <a href="{{ $campaña->elemento->url }}">{{ $elemento->url }}</a><br>
                </td>

                <td scope="row">
                    @if ($campaña->elemento->status == 1)
                    <span class="badge badge-pill badge-success">Activo</span><br>
                    @elseif($campaña->elemento->status == 0)
                    <span class="badge badge-pill badge-danger">Inactivo</span><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="table-responsive">
    <h5>Datos de la Categoria de la Comunicación No.{{ $campaña->comunicacion->id }}</h5>
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
                    <center> <img class="col-6" src="{{ Storage::url($campaña->comunicacion->imagen) }}"></center>
                </td>
                <td scope="row">
                    <label for="">Categoria : </label>
                    <span>{{ $campaña->comunicacion->name }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Descripcion : </label>
                    <span>{{ $campaña->comunicacion->descripcion }}</span><br>
                </td>

                <td scope="row">
                    @if ($campaña->status == 1)
                    <span class="badge badge-pill badge-success">Activo</span><br>
                    @elseif($campaña->status == 0)
                    <span class="badge badge-pill badge-danger">Inactivo</span><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="table-responsive">
    <h5>Datos del Empleado No.{{ $campaña->user->id }}</h5>
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
                    <img src="../uploads/avatars/{{ $campaña->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                    @if(!empty($campaña->user->getRoleNames()))
                        @foreach($campaña->user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $campaña->user->name }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $campaña->user->apellido }}</span><br>

                    <label for="">Correo : </label>
                    <span>{{ $campaña->user->email }}</span><br>

                    <label for="">Tipo : </label>
                    <span>{{ $campaña->user->tipo }}</span><br>

                    <label for="">Puesto : </label>
                    <span>{{ $campaña->user->puesto_actual_id }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Direccion : </label>
                    <span>{{ $campaña->user->direccion }}</span><br>

                    <label for="">Colonia : </label>
                    <span>{{ $campaña->user->d_asenta }}</span><br>

                    <label for="">Ciudad : </label>
                    <span>{{ $campaña->user->d_ciudad }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Sucursal : </label>
                    <span>{{ $campaña->user->sucursal_id }}</span><br>

                    <label for="">Empresa : </label>
                    <span>{{ $campaña->user->empresa_id }}</span><br>
                </td>

                <td scope="row">
                    @if ($campaña->user->estatus == 0)
                    <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                        @elseif($campaña->user->estatus == 1)
                    <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                        @elseif($campaña->user->estatus == 2)
                    <span><center><span class="badge badge-pill badge-info"> Evaluado </span></center></span>
                        @elseif($campaña->user->estatus == 3)
                    <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="mt-4">
    <a href="/campaña" class="btn btn-danger">Volver</a>
</div>
