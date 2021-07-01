@extends('layouts.app')

@extends('layouts.nav')

@extends('layouts.header')

@section('content')

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive mb-4">
                        <table class="table table-centered datatable dt-responsive nowrap table-card-list"
                            style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
                                    <th>Código Postal</th>
                                    <th>Asentamiento</th>
                                    <th>Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Nombre Municipio</th>
                                    <th>Nombre Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Entidad (INEGI, Marzo 2013)</th>
                                    <th>Código Postal de la Administración Postal que Repaste al Asentamiento</th>
                                    <th>Clave Tipo de Asentamiento (Catálogo SEPOMEX)</th>
                                    <th>Clave Municipio (INEGI, Marzo 2013)</th>
                                    <th>Identificador Único del Asentamiento (Nivel Municipal)</th>
                                    <th>Zona en la que se Ubica el Asentamiento (Urbano/Rural)</th>
                                </tr>
                            </thead>
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



@endsection

@extends('layouts.footer')
