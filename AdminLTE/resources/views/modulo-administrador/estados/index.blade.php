@extends('layouts.app')

@extends('layouts.nav')

@extends('layouts.header')

@section('content')
<style>
    .th-color{
        background-color: #1989ff;
        color: white;
    }
</style>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <nav class="navbar navbar-light float-right">
                            <form class="form-inline">
                              <input id="txtbusca" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                          </nav>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="th-color">
                                    <th>Código Postal Asentamiento</th>
                                    <th>Nombre Asentamiento</th>
                                    <th>Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Nombre Municipio (INEGI, Marzo 2013)</th>
                                    <th>Nombre Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Clave Municipio (INEGI, Marzo 2013)</th>
                                    <th>Identificador Único del Asentamiento (Nivel Municipal)</th>
                                    <th>Zona en la que se Ubica el Asentamiento (Urbano/Rural)</th>
                                </tr>
                                @foreach ($estados as $estados)
                                <tr>
                                    <td>{{ $estados->d_codigo }}</td>
                                    <td>{{ $estados->d_asenta }}</td>
                                    <td>{{ $estados->d_tipo_asenta }}</td>
                                    <td>{{ $estados->d_mnpio }}</td>
                                    <td>{{ $estados->d_estado }}</td>
                                    <td>{{ $estados->d_cp }}</td>
                                    <td>{{ $estados->c_estado }}</td>
                                    <td>{{ $estados->c_oficina }}</td>
                                    <td>{{ $estados->c_tipo_asenta }}</td>
                                    <td>{{ $estados->c_mnpio }}</td>
                                    <td>{{ $estados->id_asenta_cpcons }}</td>
                                    <td>{{ $estados->d_zona }}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.footer')
