<html>

    <head>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js"></script>
        <title>
            @yield('titulo')
        </title>
    </head>

    <body>
        @include('partials.nav')
        <div class="text-right m-3">{{ fechaActual("d/m/Y") }}</div>

        @yield('contenido')
    </body>
</html>
