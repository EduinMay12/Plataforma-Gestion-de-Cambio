<div class="table-responsive">
    <h5>Datos de la Empresa No.{{ $empresa->id }}</h5>
    <table class="table table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
        <thead>
            <tr class="table-primary">
                <th scope="col">Foto</th>
                <th scope="col">Resposable</th>
                <th scope="col">Empresa</th>
                <th scope="col">Direccion y Estado</th>
                <th scope="col">Empleados</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">
                    <center>
                        <img src="../uploads/avatars/{{ $empresa->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                        @if(!empty($empresa->user->getRoleNames()))
                            @foreach($empresa->user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $empresa->user->name  }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $empresa->user->apellido }}</span><br>

                <td scope="row">
                    <label for="">Empresa : </label>
                    <span>{{ $empresa->empresa }}</span><br>
                </td>

                <td scope="row">
                    <label for="">Direccion : </label>
                    <span>{{ $empresa->direccion }}</span><br>

                    <label for="">Colonia : </label>
                    <span>{{ $empresa->d_asenta }}</span><br>

                    <label for="">Ciudad : </label>
                    <span>{{ $empresa->d_ciudad }}</span><br>

                    <label for="">Codigo Postal : </label>
                    <span>{{ $empresa->d_codigo }}</span><br>
                </td>
                <td scope="row">
                    <label for="">No. </label>
                    <span>{{ $empresa->empleados }}</span><br>
                </td>

                <td scope="row">
                    @if ($empresa->estatus == 1)
                    <span class="badge badge-pill badge-success">Activo</span><br>
                    @elseif($empresa->estatus == 0)
                    <span class="badge badge-pill badge-danger">Inactivo</span><br>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="table-responsive">
    <h5>Datos del Empleado No.{{ $empresa->user->id }}</h5>
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
                    <img src="../uploads/avatars/{{ $empresa->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                    @if(!empty($empresa->user->getRoleNames()))
                        @foreach($empresa->user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                    </center>
                </td>
                <td scope="row">
                    <label for="">Nombre : </label>
                    <span>{{ $empresa->user->name }}</span><br>

                    <label for="">Apellido : </label>
                    <span>{{ $empresa->user->apellido }}</span><br>

                    <label for="">Correo : </label>
                    <span>{{ $empresa->user->email }}</span><br>

                    <label for="">Tipo : </label>
                    <span>{{ $empresa->user->tipo }}</span><br>

                    <label for="">Puesto : </label>
                    <span>{{ $empresa->user->puesto_actual_id }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Direccion : </label>
                    <span>{{ $empresa->user->direccion }}</span><br>

                    <label for="">Colonia : </label>
                    <span>{{ $empresa->user->d_asenta }}</span><br>

                    <label for="">Ciudad : </label>
                    <span>{{ $empresa->user->d_ciudad }}</span><br>
                </td>
                <td scope="row">
                    <label for="">Sucursal : </label>
                    <span>{{ $empresa->user->sucursal_id }}</span><br>

                    <label for="">Empresa : </label>
                    <span>{{ $empresa->user->empresa_id }}</span><br>
                </td>

                <td scope="row">
                    @if ($empresa->user->estatus == 0)
                    <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                        @elseif($empresa->user->estatus == 1)
                    <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                        @elseif($empresa->user->estatus == 2)
                    <span><center><span class="badge badge-pill badge-info"> Evaluado </span></center></span>
                        @elseif($empresa->user->estatus == 3)
                    <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                    @endif
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="col-12">
    <div class="mt-4">
        <a href="/modulo-administrador/gestionempresa" class="btn btn-danger">Volver</a>
    </div>
</div>
