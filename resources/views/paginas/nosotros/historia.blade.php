
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

    <section class="historia mostrarArriba">
        <h2 class="section__titulo">historia</h2>
        <p>In tortor massa, mollis id elementum id, dictum vel nisl. Morbi venenatis ut metus eu lobortis. Morbi efficitur, sem a molestie dapibus, ligula augue vestibulum odio, quis dapibus ex metus vel nulla. Aenean mollis, mauris at convallis sodales, risus lectus viverra mi, quis lobortis erat arcu quis lorem. Quisque id tellus sit amet dolor malesuada pretium tempor volutpat magna. Mauris interdum imperdiet arcu, in tincidunt ex aliquet sit amet. Quisque eu magna et metus porta blandit in vitae lectus. Fusce non placerat justo. In in ullamcorper ipsum. Nunc non ornare nunc. Nulla quis arcu mauris. Pellentesque venenatis fringilla nunc. Donec ut pretium magna. Vestibulum nisl diam, eleifend vel vestibulum at, pellentesque vitae justo. Fusce sollicitudin enim venenatis, lobortis quam eleifend, iaculis dolor. Proin et placerat tortor. Phasellus in mauris</p>
    </section>

    <section class="hitos">
        <h2 class="section__titulo animado">Hitos</h2>
        <div class="hitos__columna animadoIzquierda">
            <h4 class="anio">AÑO</h4>
            <img src="{!! asset('recursos/img/hitos/hitos.jpg') !!}" alt="imagen-historia-empresa">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="hitos__columna animadoDerecha">
            <h4 class="anio">AÑO</h4>
            <img src="{!! asset('recursos/img/hitos/hitos.jpg') !!}" alt="imagen-historia-empresa">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="hitos__columna animadoIzquierda">
            <h4 class="anio">AÑO</h4>
            <img src="{!! asset('recursos/img/hitos/hitos.jpg') !!}" alt="imagen-historia-empresa">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="hitos__columna animadoDerecha">
            <h4 class="anio">AÑO</h4>
            <img src="{!! asset('recursos/img/hitos/hitos.jpg') !!}" alt="imagen-historia-empresa">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </section>

@endsection