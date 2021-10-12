<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('img/icons/apple-touch-icon.png') !!}">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('img/icons/favicon-32x32.png') !!}">
    <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('img/icons/favicon-16x16.png') !!}">
    <link rel="manifest" href="{!! asset('img/icons/site.webmanifest') !!}">
    <link rel="mask-icon" href="{!! asset('img/icons/safari-pinned-tab.svg') !!}" color="#f6c015">
    <link rel="shortcut icon" href="{!! asset('img/icons/favicon.ico') !!}">
    <meta name="msapplication-TileColor" content="#01303c">
    <meta name="msapplication-config" content="{!! asset('img/icons/browserconfig.xml') !!}">
    <meta name="theme-color" content="#01303c">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="{!! asset('css/admin.css') !!}">
    @yield('more_head')
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar barra justify-content-center navbar-expand-lg navbar-dark bg-light">
        <div class="container-fluid">
            <img id="logo_image" src="{!! asset('img/logo_admin.png') !!}" class="img-fluid logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <div class="col-12 col-md-10">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Nuevos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Parciales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar Campos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Salir</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>

</html>
