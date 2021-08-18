<html>
    <header>
        <style>
        table, th, td {
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
        }
        .divuno{
            margin-bottom: 15px;
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
        .th{
            background-color: #BFC3C4;
            color: #505354;
            font-weight: bold;
            text-align: left;
        }
        
        </style>
    </header>
    <body>

    <div>
        <h1>Reporte</h1>
    </div>

    <div class="divuno">
        <table class="table">
            <tbody>
                <tr>
                    <th class="th" style="width: 8em;">Categoria: </th>
                    <td style="width: 15em;">Desarrollo web</td>
                </tr>
                <tr>
                    <th class="th" style="width: 8em;">Curso: </th>
                    <td style="width: 15em;">Curso laravel 8 desde cero</td>
                </tr>
                <tr>
                    <th class="th" style="width: 8em;">Grupo: </th>
                    <td style="width: 15em;">Grupo A</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th class="td-head" style="width: 2em;">No.</th>
                <th class="td-head" style="width: 15em;">Nombre</th>
                <th class="td-head" style="width: 7em;">Rol</th>
                <th class="td-head" style="width: 10em;">Sucursal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matriculaciones as $matriculacion)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$matriculacion->name}} {{$matriculacion->apellido}}</td>
                    <td>Participante</td>
                    <td>sucursal merida</td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
        
        
    </body>

</html>

