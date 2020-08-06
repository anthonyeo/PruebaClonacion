
@section('title')
@extends('layout')

@section('enlace_head')
    <link rel="stylesheet" href="{!! asset('recursos/css/swiper-bundle.min.css') !!}">
@endsection


@section('banner')

<div class="fondo_contactenos">
    <img src="{!! asset('recursos/img/fondos/fondo2.jpg') !!}" alt="fondo_contactenos">
</div>

@endsection

@section('contenido')

<section class="contact" id="contact">
    <h2 class="section__titulo mostrarArriba">Contáctenos</h2>
    <h3 class="section__description mostrarArriba">Escríbenos, ponte en contacto.</h3>
    <div class="contact__columna mostrarIzquierda">
        <form id="form" action="#">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nombre" id="nombre">
                <div class="validation">
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-times-circle"></i>
                    <small class="validation-message">Ingrese correctamente el campo</small>
                </div>
            </div>
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" id="correo">
                <div class="validation">
                    <i class="far fa-check-circle"></i>
                    <i class="far fa-times-circle"></i>
                    <small class="validation-message">Ingrese correctamente el campo</small>
                </div>
            </div>
            <div class="input-field-textarea">
                <textarea id="mensaje" cols="30" rows="10" placeholder="Ingrese el mensaje"></textarea>
                <div class="validation">
                    <small class="validation-message">Ingrese correctamente el campo</small>
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn solid">
        </form>
    </div>
    <div class="contact__columna__derecha mostrarDerecha">
        <p>Pueden contactarnos usando el formulario
            de la izquierda, alternativamente
            estos enlaces de abajo:</p>
        <div class="contact__sociales">
            <a class="icon-w" href="#"><i class="fab fa-whatsapp"></i> (+51) 987 654 321</a><br>
            <a class="icon-" href="#"><i class="fab fa-facebook-f"></i>
                https://www.facebook.com/miempresa</a><br>
            <a class="icon-" href="#"><i class="fab fa-linkedin-in"></i>
                https://www.linkedin.com/company/miempresa</a><br>
            <a class="icon-" href="#"><i class="fab fa-twitter"></i> https://twitter.com/miempresa</a><br>
        </div>
    </div>
</section>

@endsection

@section('enlace_footer')
    <script src="{!! asset('recursos/js/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('recursos/js/validacion-message.js') !!}"></script>
    <script src="{!! asset('recursos/js/slider.js') !!}"></script>
@endsection