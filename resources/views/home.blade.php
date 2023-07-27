<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">Numero carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                            <th scope="col">Data di partenza</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trains as $train) 
                            <tr>
                                <td>{{ $train->azienda }}</td>
                                <td>{{ $train->stazione_di_partenza }}</td>
                                <td>{{ $train->stazione_di_arrivo }}</td>
                                <td>{{ $train->orario_di_partenza }}</td>
                                <td>{{ $train->orario_di_arrivo }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                <td>{{ $train->numero_carrozze }}</td>
                                <td>@if($train->in_orario == 1) in orario
                                    @else <strong>in ritardo</strong>
                                    @endif
                                </td>
                                <td>@if($train->cancellato == 1) <strong>treno cancellato</strong>
                                    @else treno non cancellato
                                    @endif</td>
                                <td>{{ $train->data_partenza }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>