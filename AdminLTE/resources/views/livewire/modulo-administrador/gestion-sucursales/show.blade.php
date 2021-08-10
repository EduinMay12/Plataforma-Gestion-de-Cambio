<div class="row">
    <div class="col">
        <div class="table-responsive">
            <h5>Datos de la Sucursal No.{{ $sucursal->id }}</h5>
            <table class="table table-striped datatable dt-responsive nowrap table-card-list" style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Foto</th>
                        <th scope="col">Resposable</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Direccion y Estado</th>
                        <th scope="col">Empleados</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Tamaño</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <center>
                                <img src="../uploads/avatars/{{ $sucursal->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                                @if(!empty($sucursal->user->getRoleNames()))
                                    @foreach($sucursal->user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </center>
                        </td>
                        <td scope="row">
                            <label for="">Nombre : </label>
                            <span>{{ $sucursal->user->name  }}</span><br>

                            <label for="">Apellido : </label>
                            <span>{{ $sucursal->user->apellido }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">Sucursal : </label>
                            <span>{{ $sucursal->sucursal }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">Empresa : </label>
                            <span>{{ $sucursal->empresa->empresa }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">Direccion : </label>
                            <span>{{ $sucursal->direccion }}</span><br>

                            <label for="">Estado : </label>
                            <span>{{ $sucursal->estado }}</span><br>

                            <label for="">Colonia : </label>
                            <span>{{ $sucursal->d_asenta }}</span><br>

                            <label for="">Ciudad : </label>
                            <span>{{ $sucursal->d_ciudad }}</span><br>

                            <label for="">Codigo Postal : </label>
                            <span>{{ $sucursal->d_codigo }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">No. </label>
                            <span>{{ $sucursal->empleados }}</span><br>
                        </td>
                        <td scope="row">
                            @if ($sucursal->estatus == 1)
                            <span class="badge badge-pill badge-success">Activo</span><br>
                            @elseif($sucursal->estatus == 0)
                            <span class="badge badge-pill badge-danger">Inactivo</span><br>
                            @endif
                        </td>
                        <td scope="row">
                            @if ($sucursal->tamaño == 0)
                            <span class="badge badge-pill badge-secondary"> Grande </span><br>
                            @elseif ($sucursal->tamaño == 1)
                            <span class="badge badge-pill badge-warning"> Mediano </span><br>
                            @elseif($sucursal->tamaño == 2)
                            <span class="badge badge-pill badge-dark"> Chico </span><br>
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h5>Datos de la Empresa No.{{ $sucursal->empresa->id }}</h5>
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
                                <img src="../uploads/avatars/{{ $sucursal->empresa->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                                @if(!empty($sucursal->empresa->user->getRoleNames()))
                                    @foreach($sucursal->empresa->user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
                                    @endforeach
                                @endif
                            </center>
                        </td>
                        <td scope="row">
                            <label for="">Nombre : </label>
                            <span>{{ $sucursal->empresa->user->name  }}</span><br>

                            <label for="">Apellido : </label>
                            <span>{{ $sucursal->empresa->user->apellido }}</span><br>

                        <td scope="row">
                            <label for="">Empresa : </label>
                            <span>{{ $sucursal->empresa->empresa }}</span><br>
                        </td>

                        <td scope="row">
                            <label for="">Direccion : </label>
                            <span>{{ $sucursal->empresa->direccion }}</span><br>

                            <label for="">Colonia : </label>
                            <span>{{ $sucursal->empresa->d_asenta }}</span><br>

                            <label for="">Ciudad : </label>
                            <span>{{ $sucursal->empresa->d_ciudad }}</span><br>

                            <label for="">Codigo Postal : </label>
                            <span>{{ $sucursal->empresa->d_codigo }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">No. </label>
                            <span>{{ $sucursal->empresa->empleados }}</span><br>
                        </td>

                        <td scope="row">
                            @if ($sucursal->empresa->estatus == 1)
                            <span class="badge badge-pill badge-success">Activo</span><br>
                            @elseif($sucursal->empresa->estatus == 0)
                            <span class="badge badge-pill badge-danger">Inactivo</span><br>
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h5>Datos del Empleado No.{{ $sucursal->user->id }}</h5>
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
                            <img src="../uploads/avatars/{{ $sucursal->user->avatar }}" width="100" height="100" class="rounded-circle"> <br>
                            @if(!empty($sucursal->user->getRoleNames()))
                                @foreach($sucursal->user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                            </center>
                        </td>
                        <td scope="row">
                            <label for="">Nombre : </label>
                            <span>{{ $sucursal->user->name }}</span><br>

                            <label for="">Apellido : </label>
                            <span>{{ $sucursal->user->apellido }}</span><br>

                            <label for="">Correo : </label>
                            <span>{{ $sucursal->user->email }}</span><br>

                            <label for="">Tipo : </label>
                            <span>{{ $sucursal->user->tipo }}</span><br>

                            <label for="">Puesto : </label>
                            <span>{{ $sucursal->user->puesto_actual_id }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">Direccion : </label>
                            <span>{{ $sucursal->user->direccion }}</span><br>

                            <label for="">Colonia : </label>
                            <span>{{ $sucursal->user->d_asenta }}</span><br>

                            <label for="">Ciudad : </label>
                            <span>{{ $sucursal->user->d_ciudad }}</span><br>
                        </td>
                        <td scope="row">
                            <label for="">Sucursal : </label>
                            <span>{{ $sucursal->user->sucursal_id }}</span><br>

                            <label for="">Empresa : </label>
                            <span>{{ $sucursal->user->empresa_id }}</span><br>
                        </td>

                        <td scope="row">
                            @if ($sucursal->user->estatus == 0)
                            <span><center><span class="badge badge-pill badge-danger"> Necesita Ayuda </span></center></span>
                                @elseif($sucursal->user->estatus == 1)
                            <span><center><span class="badge badge-pill badge-warning"> Pendiente </span></center></span>
                                @elseif($sucursal->user->estatus == 2)
                            <span><center><span class="badge badge-pill badge-info"> Evaluado </span></center></span>
                                @elseif($sucursal->user->estatus == 3)
                            <span><center><span class="badge badge-pill badge-secondary"> Eres Administrador </span></center></span>
                            @endif
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="mt-4">
        <a href="/modulo-administrador/gestionsucursal" class="btn btn-danger">Volver</a>
    </div>
</div>


