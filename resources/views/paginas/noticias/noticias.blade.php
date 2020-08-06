
@section('title')
@extends('layout')

@section('enlace_head')

    <link rel="stylesheet" href="{!! asset('recursos/css/noticias/noticias.css') !!}">
@endsection

@section('banner')
    <div class="fondo_noticias">
        <img src="{!! asset('recursos/img/fondos/fondo2.jpg') !!}" alt="fondo-nosotros">
    </div>
@endsection

@section('contenido')

    @if (isset($pagina))
    <section class="noticias" id="noticias">
        <h2 class="section__titulo mostrarArriba">Noticias</h2>
        <p class="mostrarArriba">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="noticias__tipo">
            <a id="noticias__tipo__todos" class="noticias__tipo__todos  mostrarIzquierda" onclick="peticion('/noticias_tipo')">Todos</a>
            <a id="noticias__tipo__eventos"  class="{{ ($pagina=='eventos') ? 'noticias__tipo__eventos select_menu' : 'noticias__tipo__eventos' }}  mostrarArriba" onclick="peticion('/eventos_tipo')">Eventos</a>
            <a id="noticias__tipo__pubicaciones" class="{{ ($pagina=='publicaciones') ? 'noticias__tipo__pubicaciones select_menu' : 'noticias__tipo__pubicaciones' }}  mostrarDerecha" onclick="peticion('/publicaciones_tipo')">Publicaciones</a>
        </div>
        <div class="noticias__listado" id="noticias__listado">
            
                @if ($pagina=='eventos')
                    @include('paginas/noticias/eventos_listado')
                @else
                    @include('paginas/noticias/publicaciones_listado')
                @endif
        </div>
    </section>
    @endif
    
    <section class="noticia_info" id="noticia_info">
        @if (isset($datos))
            @include('paginas/noticias/noticias_info')
        @endif
    </section>

@endsection



@section('enlace_footer')
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{!! asset('recursos/js/noticias/noticias.js') !!}"></script>

@endsection