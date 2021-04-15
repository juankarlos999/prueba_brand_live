<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 style="text-align:center;">COMBINADOR DE LETRAS</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('string.calculatorCombiner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Escriba la cadena de letras</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ejemplo: MFJNERJNRFKV" name="letters">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Ingrese el numero de letras de la palabra</label>
                            <div class="input-group mb-2">
                                <input type="number" class="form-control" id="inlineFormInputGroup" name="lengthWord">
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Calcular combinaciones</button>
                    </div>
                </form>

                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Palabras sugeridas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @isset($arrPassResult)
                            @foreach($arrPassResult as $value)
                            @for ($i = 0; $i < $numCombinations; $i++) <th scope="row">{{ $i }}</th>
                                @endfor
                                <td>{{ $value }}</td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>