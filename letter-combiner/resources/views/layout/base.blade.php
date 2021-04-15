<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Test BrandLive</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Style -->
    <style>
        body {
            background-color: #D1F2EB;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark" style="background-color: #1693eb">
            <img src="/img/letters.svg" width="100" height="80" />
            <h1 class="display-5" style="color: whitesmoke; text-align:center;">COMBINADOR DE LETRAS</h1>
        </nav>
    </header>
    @yield('content')
</body>

</html>