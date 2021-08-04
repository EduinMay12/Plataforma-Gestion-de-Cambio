<div class="col-12">

    <label for="">Empresa : </label>
    <span>{{ $sucursal->empresa_id }}</span><br>

    <label for="">Sucursal : </label>
    <span>{{ $sucursal->sucursal }}</span><br>

    <label for="">Resposable: </label>
    <span>{{ $sucursal->user->name  }} {{ $sucursal->user->apellido }}</span><br>

    <label for="">Direccion : </label>
    <span>{{ $sucursal->direccion }}</span><br>

    <label for="">Empleados : </label>
    <span>{{ $sucursal->empleados }}</span><br>

    <label for="">Estado : </label>
    <span>{{ $sucursal->estado }}</span><br>

    <label for="">Colonia : </label>
    <span>{{ $sucursal->d_asenta }}</span><br>

    <label for="">Ciudad : </label>
    <span>{{ $sucursal->d_ciudad }}</span><br>

    <label for="">Codigo Postal : </label>
    <span>{{ $sucursal->d_codigo }}</span><br>

    <label for="">Estatus: </label>
    @if ($sucursal->estatus == 1)
    <span class="badge badge-pill badge-success">Activo</span><br>
    @elseif($sucursal->estatus == 0)
    <span class="badge badge-pill badge-danger">Inactivo</span><br>
    @endif

    <label for="">Tamaño : </label>
    @if ($sucursal->tamaño == 0)
    <span class="badge badge-pill badge-secondary"> Grande </span><br>
    @elseif ($sucursal->tamaño == 1)
    <span class="badge badge-pill badge-warning"> Mediano </span><br>
    @elseif($sucursal->tamaño == 2)
    <span class="badge badge-pill badge-light"> Chico </span><br>
    @endif

    <div class="mt-4">
        <a href="/modulo-administrador/gestionsucursal" class="btn btn-danger">Volver</a>
    </div>

</div>
