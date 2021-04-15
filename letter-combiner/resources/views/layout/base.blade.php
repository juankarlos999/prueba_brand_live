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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- Style -->
    <style>
        body {
            background-color: whitesmoke;
        }

        header {
            box-shadow: -1px 17px 9px -12px rgba(0, 0, 0, 0.30);
            background-color: #1693eb;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        img {
            width: 12%;
        }

        h1 {
            color: whitesmoke;
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-dark">
                <img src="/img/letters.svg" />
                <h1 class="display-5">COMBINADOR DE LETRAS</h1>
                <div id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('/') }}"><- Regresar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>
</body>

</html>