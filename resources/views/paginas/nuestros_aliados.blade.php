
@section('title')
@extends('layout')

@section('enlace_head')

    <link rel="stylesheet" href="{!! asset('recursos/css/nuestros-aliados/nuestros_aliados.css') !!}">
@endsection

@section('banner')

<div class="fondo_nosotros">
    <img src="{!! asset('recursos/img/fondos/fondo2.jpg') !!}" alt="fondo-nosotros">
</div>

@endsection

@section('contenido')

<section class="nuestros_aliados">
    <h2 class="section__titulo mostrarArriba">Áreas de Negocios</h2>
    <p class="descripcion mostrarArriba">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div class="nuestros_aliados__areas">
        <a id="navegador__menu__todos" class="navegador__menu__todos select_menu mostrarIzquierda" onclick="peticion('/todo')">Todos</a>
        <a id="navegador__menu__logistica" class="navegador__menu__logistica mostrarIzquierda" onclick="peticion('/logistica')">Logística</a>
        <a id="navegador__menu__energia" class="navegador__menu__energia mostrarArriba" onclick="peticion('/energia')">Energía</a>
        <a id="navegador__menu__servicios" class="navegador__menu__servicios mostrarDerecha" onclick="peticion('/servicios')">Servicios</a>
        <a id="navegador__menu__consumo" class="navegador__menu__consumo mostrarDerecha" onclick="peticion('/consumo')">Consumo</a>
    </div>
    <div class="nuestros_aliados__empresas">
        <div class="empresas__columna animadoIzquierda" id="servicios">
            <img src="{!! asset('recursos/img/empresas/CLUB+.png') !!}" alt="" />
            <h3>CLUB+</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animado" id="consumo">
            <img src="{!! asset('recursos/img/empresas/DON ROMAN.png') !!}" alt="" />
            <h3>Don Roman</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animadoDerecha" id="consumo1">
            <img src="{!! asset('recursos/img/empresas/LUMAR.png') !!}" alt="" />
            <h3>Lumar</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animadoIzquierda" id="servicios3">
            <img src="{!! asset('recursos/img/empresas/POSSIBLE.png') !!}" alt="" />
            <h3>POSSIBLE</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animado" id="servicios2">
            <img src="{!! asset('recursos/img/empresas/SKIES.png') !!}" alt="" />
            <h3>SKIES</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animadoDerecha" id="logistica">
            <img src="{!! asset('recursos/img/empresas/SONNER.png') !!}" alt="" />
            <h3>SONNER</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
        <div class="empresas__columna animadoIzquierda" id="logistica1">
            <img src="{!! asset('recursos/img/empresas/corporaicon.png') !!}" alt="" />
            <h3>Corporaicon</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipisicing elit..</p>
            <a href="#">Visitar Sitio</a>
        </div>
    </div>
</section>

@endsection


@section('enlace_footer')
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{!! asset('recursos/js/nuestros-aliados/nuestros_aliados.js') !!}"></script>

@endsection