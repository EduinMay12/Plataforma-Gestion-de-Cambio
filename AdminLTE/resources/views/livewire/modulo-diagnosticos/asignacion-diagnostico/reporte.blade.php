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
        <h1>Reporte de asiagnaciones</h1>
    </div>


    <div>
        <table class="table table-sm table-bordered">
        <thead class="td-head">
            <tr>
                <th>No.</th>
                <th >Participante</th>
                <th >Puesto Actual</th>
                <th >Puesto Futuro</th>
                <th >Evaluador</th>
                <th>Rol Evaluación</th>
                <th>Reporta_a</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asignaciones as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->puesto_actual }}</td>
                    <td>{{ $item->puesto_futuro }}</td>
                    <td>{{ $item->evaluador}}</td>
                    <td>{{ $item->rol_diagnostico }}</td>
                    <td>{{ $item->reporta_a }}</td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
        
        
    </body>

</html>


