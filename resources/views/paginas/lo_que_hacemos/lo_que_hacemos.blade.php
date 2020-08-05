
@section('title')
@extends('layout')

@section('enlace_head')
    <link rel="stylesheet" href="{!! asset('recursos/css/lo-que-hacemos/proyectos.css') !!}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('banner')

<div class="fondo_proyectos">
    <img src="{!! asset('recursos/img/fondos/fondo2.jpg') !!}" alt="fondo-nosotros">
</div>

@endsection

@section('contenido')

    <section class="lo-que-hacemos">
        <h2 class="section__titulo mostrarArriba">Lo que hacemos</h2>
        <div class="lo-que-hacemos__navegador mostrarIzquierda">
            <div class="navegador__menu">
                <a id="navegador__menu__proyectos" class="{{ ($pagina=='proyectos') ? 'navegador__menu__proyectos select_menu' : 'navegador__menu__proyectos' }}" onclick="peticion('/proyectos_tipo')">Proyectos</a>
                <a id="navegador__menu__voluntariado" class="{{ ($pagina=='voluntariado') ? 'navegador__menu__voluntariado select_menu' : 'navegador__menu__voluntariado' }}" onclick="peticion('/voluntariado_tipo')">Voluntariado</a>
            </div>
            <div class="navedador__descripcion_proyectos" id="navedador__descripcion_proyectos">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="navedador__descripcion_voluntariado" id="navedador__descripcion_voluntariado">
                <p>Phasellus blandit placerat dapibus. Vivamus ullamcorper nec enim ut viverra. Curabitur blandit sit amet risus eget eleifend. Praesent scelerisque sollicitudin nisi ac facilisis. Donec et purus sit amet ipsum accumsan iaculis at sit amet turpis. Donec placerat rhoncus velit ac mollis. Aliquam ac magna luctus, interdum augue ac, congue orci. Mauris eget metus dui. </p>
            </div>
        </div>
        <div class="lo-que-hacemos__contenido mostrarDerecha">
            
            <div class="voluntariado" id="voluntariado">
                @if ($pagina=='voluntariado')
                    @include('paginas/lo_que_hacemos/voluntariado')
                @endif
            </div>

            <div class="proyectos" id="proyectos">
                @if ($pagina=='proyectos')
                        @include('paginas/lo_que_hacemos/proyectos')
                @endif
            </div>

            <div class="informacion" id="informacion"></div>
        </div>
    </section>
@endsection



@section('enlace_footer')
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{!! asset('recursos/js/lo-que-hacemos/lo-que-hacemos.js') !!}"></script>

@endsection