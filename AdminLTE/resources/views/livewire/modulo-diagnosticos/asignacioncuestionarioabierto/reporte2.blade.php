<html>
    <header>
        <style>
        table, th, td {
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
        }
        .td-head{
            background-color: #BFC3C4;
            color: #505354;
            font-weight: bold;
        }
        h1{
            text-align: center;
            color: #505354;
        }
        
        </style>
    </header>
    <body>

    <div>
        <h1>Reporte de asignaciones de cuestionarios abiertos</h1>
    </div>


    <div>
        <table class="table table-sm table-bordered">
        <thead class="td-head">
            <tr>
                <th>No.</th>
                <th>Participante</th>
                <th>Cuestionario</th>
                <th>Fecha asignada</th>
                <th>Fecha Limite</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asignaciones as $asignacion)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $asignacion->name }}</td>
                    <td>{{ $asignacion->nombre}}</td>
                    <td>{{ $asignacion->fecha_asignada }}</td>
                    <td>{{ $asignacion->fecha_limite }}</td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
        
        
    </body>

</html>



