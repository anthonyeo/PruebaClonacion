
@extends('layout')

@section('title')

@section('enlace_head')
    <link rel="stylesheet" href="{!! asset('recursos/css/nosotros/nuestro-equipo.css') !!}" />
@endsection

@section('banner')
    <div class="fondo_nosotros">
        <img src="{!! asset('recursos/img/fondos/fondo-nosotros.jpg') !!}" alt="fondo-nosotros">
    </div>
@endsection

@section('contenido')

    <section class="equipo">
        <h2 class="section__titulo mostrarArriba">Nuestro equipo</h2>
        <p class="mostrarArriba">In tortor massa, mollis id elementum id, dictum vel nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur, sem
            a molestie dapibus, ligula augue vestibulum odio, quis dapibus ex metus vel nulla. Aenean mollis, mauris at convallis
            sodales, risus lectus viverra mi, quis lobortis erat arcu quis lorem. Quisque id tellus sit amet dolor malesuada
            pretium tempor volutpat magna. Mauris interdum imperdiet arcu, in tincidunt ex aliquet sit amet. Quisque eu
            magna et metus porta blandit in vitae lectus. Fusce non placerat justo. In in ullamcorper ipsum.
        </p>
        <div class="equipo_contenedor">
            <div class="equipo__columna animadoIzquierda">
                <img src="{!! asset('recursos/img/equipo/foto2.jpg') !!}" alt="">
                <h4 class="nombre">Antonio José Buendia</h4>
                <h4 class="cargo">Gerente General</h4>
            </div>
            <div class="equipo__columna animadoDerecha">
                <img src="{!! asset('recursos/img/equipo/foto1.jpg') !!}" alt="">
                <h4 class="nombre">María Sonia Escobar</h4>
                <h4 class="cargo">Presidente</h4>
            </div>
            <div class="equipo__columna animadoIzquierda">
                <img src="{!! asset('recursos/img/equipo/foto2.jpg') !!}" alt="">
                <h4 class="nombre">Francisco Asis Gonzalez</h4>
                <h4 class="cargo">Vicepresidente</h4>
            </div>
            <div class="equipo__columna animadoDerecha">
                <img src="{!! asset('recursos/img/equipo/foto1.jpg') !!}" alt="">
                <h4 class="nombre">Maria Alicia Zafra</h4>
                <h4 class="cargo">Gerente de proyectos</h4>
            </div>
            <div class="equipo__columna animadoIzquierda">
                <img src="{!! asset('recursos/img/equipo/foto2.jpg') !!}" alt="">
                <h4 class="nombre">Asistente de proyectos</h4>
                <h4 class="cargo">Cargo</h4>
            </div>
            <div class="equipo__columna animadoDerecha">
                <img src="{!! asset('recursos/img/equipo/foto1.jpg') !!}" alt="">
                <h4 class="nombre">Maria Antonia San Miguel</h4>
                <h4 class="cargo">Jefe de logística</h4>
            </div>
        </div>
    </section>

@endsection