<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Corporación XYZ')</title>
    
    <link rel="stylesheet" href="{!! asset('recursos/css/style.css') !!}" />
    <link rel="stylesheet" href="{!! asset('recursos/css/animacion.css') !!}" />


    @yield('enlace_head')
    <script src="https://kit.fontawesome.com/12225bd5bc.js" crossorigin="anonymous"></script>
    
</head>
<body>
    @yield('prueba')
    @include('parciales/header')
    
    @yield('banner')

    <main class="main">
        <div class="contenedor">
            @yield('contenido')
        </div>
    </main>

    @include('parciales/footer')
    <script src="{!! asset('recursos/js/menu.js') !!}"></script>
    <script src="{!! asset('recursos/js/animacion.js') !!}"></script>
    {{-- <script src="https://account.snatchbot.me/script.js"></script>
    <script>window.sntchChat.Init(124637)</script>  --}}
    @yield('enlace_footer')
</body>
</html>