
@section('title')
@extends('layout')
@section('enlace_head')
    <link rel="stylesheet" href="{!! asset('recursos/css/nosotros/quienes-somos.css') !!}" />
@endsection
@section('banner')

    <div class="fondo_nosotros">
        <img src="{!! asset('recursos/img/fondos/fondo-nosotros.jpg') !!}" alt="fondo-nosotros">
    </div>

@endsection

@section('contenido')
    <section class="sobre_nosotros">
        <h2 class="section__titulo mostrarArriba">Sobre nosotros</h2>
        <div class="sobre_nosotros__columna">
            <div class="sobre_nosotros__info mostrarIzquierda">
                <h3>¿Quienes somos?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="sobre_nosotros__icon icon1"><i class="fas fa-users mostrarDerecha"></i></div>
        </div>  
        <div class="sobre_nosotros__columna">
            <div class="sobre_nosotros__info animadoDerecha">
                <h3>Misión</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="sobre_nosotros__icon icon2"><img class="animadoIzquierda" src="{!! asset('recursos/img/icons/goal.svg') !!}" alt=""></div>
        </div> 
        <div class="sobre_nosotros__columna">
            <div class="sobre_nosotros__info animadoIzquierda">
                <h3>Visión</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="sobre_nosotros__icon icon3"><img class="animadoDerecha" src="{!! asset('recursos/img/icons/strategy.svg') !!}" alt=""></div>
        </div>   
    </section>

    <section class="valores_corporativos">
        <h2 class="section__titulo animado">Valores corporativos</h2>
        <div class="valores_corporativos_columna animadoIzquierda">
            <i class="far fa-check-circle"></i>
            <h3>Compromiso</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
        <div class="valores_corporativos_columna animadoDerecha">
            <i class="far fa-check-circle"></i>
            <h3>Responsabilidad</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
        <div class="valores_corporativos_columna animadoIzquierda">
            <i class="far fa-check-circle"></i>
            <h3>Respeto</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
        <div class="valores_corporativos_columna animadoDerecha">
            <i class="far fa-check-circle"></i>
            <h3>Pasión</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
        <div class="valores_corporativos_columna animadoIzquierda">
            <i class="far fa-check-circle"></i>
            <h3>Calidad</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
        <div class="valores_corporativos_columna animadoDerecha">
            <i class="far fa-check-circle"></i>
            <h3>Esfuerzo</h3>
            <p>In tortor massa, mollis id elementum id, dictum vel
                nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur,
                sem a molestie dapibus, ligula augue vestibulum
                odio, quis dapibus ex metus vel nulla.</p>
        </div>
    </section>
@endsection


@section('enlace_footer')
    
@endsection