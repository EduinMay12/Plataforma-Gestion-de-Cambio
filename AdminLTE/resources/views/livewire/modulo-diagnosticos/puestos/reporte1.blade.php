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
        <h1>Reporte de puestos con competencias asociados</h1>
    </div>


    <div>
        <table class="table table-sm table-bordered">
        <thead class="td-head">
            <tr>
                <th>No.</th>
                <th>Puestos</th>
                <th>Competencias</th>

            </tr>
        </thead>
        <tbody>
            @foreach($puestos as $puesto)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $puesto->nombre }}</td>
                    <td>
                        @foreach ($puesto->competencias as $item)
                           {{ $item->nombre }} nivel ( {{ $item->pivot->nivel_id }} ),  
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
        
        
    </body>

</html>



