<div class="col-12">

    <label for="">Sucursal : </label>
    <span>{{ $empresa->empresa }}</span><br>

    <label for="">Resposable: </label>
    <span>{{ $empresa->user->name }}</span><br>

    <label for="">Direccion : </label>
    <span>{{ $empresa->direccion }}</span><br>

    <label for="">Empleados : </label>
    <span>{{ $empresa->empleados }}</span><br>

    <label for="">Colonia : </label>
    <span>{{ $empresa->d_asenta }}</span><br>

    <label for="">Ciudad : </label>
    <span>{{ $empresa->d_ciudad }}</span><br>

    <label for="">Codigo Postal : </label>
    <span>{{ $empresa->d_codigo }}</span><br>

    <label for="">Estatus: </label>
    @if ($empresa->estatus == 1)
    <span class="badge badge-pill badge-success">Activo</span><br>
    @elseif($empresa->estatus == 0)
    <span class="badge badge-pill badge-danger">Inactivo</span><br>
    @endif


    <div class="mt-4">
        <a href="/modulo-administrador/gestionempresa" class="btn btn-danger">Volver</a>
    </div>

</div>
