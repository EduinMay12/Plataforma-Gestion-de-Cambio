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
        <h1>Reporte respuestas de preguntas abiertas - evaluación</h1>
    </div>


    <div>
        <table class="table table-sm table-bordered">
        <thead class="td-head">
            <tr>
                <th>No.</th>
                <th>Preguntas</th>
                <th>Respuestas</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($respuestas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->textPregunta }}</td>
                    <td>{{ $item->textRespuesta }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
        
        
    </body>

</html>



