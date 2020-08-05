@section('title')
@extends('layout')

@section('enlace_head')
    <link rel="stylesheet" href="{!! asset('recursos/css/swiper-bundle.min.css') !!}">
@endsection

@section('banner')
    <div class="banner">
        <ul class="slider">
            <li>
                <div class="imagen"><img src="{!! asset('recursos/img/fondos/fondo-banner4.jpg') !!}" alt="imagen-portada"></div>
                <div class="descripcion">
                    <h2 class="banner__titulo">Trabaje con nosotros</h2>
                    <p class="banner__texto">Nos adaptamos a tus necesidades</p>
                    <div class="botones">
                        <a href="#" class="btn-info">Más información</a><br><br>
                        <a href="#" class="btn-contacto">Contáctenos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="imagen"><img src="{!! asset('recursos/img/fondos/fondo-banner1.jpg') !!}" alt="imagen-portada"></div>
                <div class="descripcion">
                    <h2 class="banner__titulo">Título 2</h2>
                    <p class="banner__texto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum, pariatur.</p>
                    <div class="botones">
                        <a href="#" class="btn-info">Más información</a><br><br>
                        <a href="#" class="btn-contacto">Contáctenos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="imagen"><img src="{!! asset('recursos/img/fondos/fondo-banner3.jpg') !!}" alt="imagen-portada"></div>
                <div class="descripcion">
                    <h2 class="banner__titulo">Título 3</h2>
                    <p class="banner__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="botones">
                        <a href="#" class="btn-info">Más información</a><br><br>
                        <a href="#" class="btn-contacto">Contáctenos</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="imagen"><img src="{!! asset('recursos/img/fondos/fondo-banner2.jpg') !!}" alt="imagen-portada"></div>
                <div class="descripcion">
                    <h2 class="banner__titulo">Título 4</h2>
                    <p class="banner__texto">Lorem ipsum dolor sit amet.</p>
                    <div class="botones">
                        <a href="#" class="btn-info">Más información</a><br><br>
                        <a href="#" class="btn-contacto">Contáctenos</a>
                    </div>
                </div>
            </li>
        </ul>
        <ol class="pagination">
        </ol>
        <div class="left"><i class="fas fa-chevron-left"></i></div>
        <div class="right"><i class="fas fa-chevron-right"></i></div>
    </div>

@endsection

@section('contenido')

    <section class="grupo mostrarArriba">
        <h2 class="grupo__titulo">Corporación <strong><span>XYZ</span></strong></h2>
        <p class="grupo__descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec
            dictum
            turpis. Sed laoreet dui eget placerat suscipit. Suspendisse varius vehicula nisl in
            vulputate. Phasellus tincidunt sodales fringilla. Etiam vel elit vitae nisi ornare sollicitudin.
            Ut commodo, tortor sit amet sollicitudin malesuada, odio felis egestas justo,
            eget tempor orci mi a dolor.</p>
    </section>

    <section class="info1">
        <div class="info1__contenedor">
            <h2 class="section__titulo animado">¿Por qué confiar en nosotros?</h2>
            <div class="info1__column animadoIzquierda">
                <div class="icon"><i class="fa fa-gears fa-3x"></i></div>
                <h3>Experiencia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat laudantium rerum
                    vel
                    consequatur voluptatem? Ut dolore necessitatibus saepe, qui ipsam iusto voluptate.</p>
            </div>
            <div class="info1__column animadoIzquierda">
                <div class="icon"><i class="fas fa-user-tie fa-3x"></i></div>
                <h3>Seriedad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat laudantium rerum
                    vel
                    consequatur voluptatem? Ut dolore necessitatibus saepe, qui ipsam iusto voluptate.</p>
            </div>
            <div class="info1__column animadoDerecha">
                <div class="icon"><i class="fas fa-medal fa-3x"></i></div>
                <h3>Calidad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat laudantium rerum
                    vel
                    consequatur voluptatem? Ut dolore necessitatibus saepe, qui ipsam iusto voluptate.</p>
            </div>
            <div class="info1__column last animadoDerecha">
                <div class="icon"><i class="fas fa-hand-holding-heart fa-3x"></i></div>
                <h3>Pasión</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat repellat laudantium rerum
                    vel
                    consequatur voluptatem? Ut dolore necessitatibus saepe, qui ipsam iusto voluptate.</p>
            </div>
        </div>
    </section>

    <section class="empresas">
        <h2 class="section__titulo animado">Empresas Aliadas</h2>
        <div class="swiper-container" id="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide active-slider empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/CLUB+.png') !!}" alt="" /></div>
                    <h2>CLUB+</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/DON ROMAN.png') !!}" alt="" width="280"
                            height="300" />
                    </div>
                    <h2>Don Roman</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/LUMAR.png') !!}" alt="" /></div>
                    <h2>Lumar</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/POSSIBLE.png') !!}" alt="" /></div>
                    <h2>POSSIBLE</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/SKIES.png') !!}" alt="" /></div>
                    <h2>SKIES</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/SONNER.png') !!}" alt="" /></div>
                    <h2>SONNER</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
                <div class="swiper-slide empresas__colmun">
                    <div class="empresas__logo"><img src="{!! asset('recursos/img/empresas/corporaicon.png') !!}" alt="" />
                    </div>
                    <h2>Corporaicon</h2>
                    <p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>.</p>
                    <a class="empresas__link" href="#" target="_blank"><i
                            class="fa fa-angle-double-right"></i>Visitar
                        Sitio</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="novedades">
        <h2 class="section__titulo animado">Últimas novedades</h2>
        <div class="espacio"></div>
        <div class="novedades__columna">
            <div class="novedades__imagen"><img src="{!! asset('recursos/img/noticias/projects.jpg') !!}" alt="" class="imagen"></div>
            <h4>22 / 07 / 2020</h4>
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin
                vehicula tristique interdum. Nam gravida magna sit amet est venenatis, vitae pretium neque
                volutpat.</p>
            <a class="novedades__link" href="{{url('noticias_info',array('tipo'=>'publicaciones','id'=>'1'))}}" target="_blank"><i class="fa fa-angle-double-right"></i>Ver
                más</a>
        </div>
        <div class="novedades__columna">
            <div class="novedades__imagen"><img src="{!! asset('recursos/img/noticias/fondo-voluntariado2.jpg') !!}" alt="" class="imagen"></div>
            <h4>22 / 07 / 2020</h4>
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin
                vehicula tristique interdum. Nam gravida magna sit amet est venenatis, vitae pretium neque
                volutpat.</p>
            <a class="novedades__link" href="{{url('noticias_info',array('tipo'=>'evento','id'=>'1'))}}" target="_blank"><i class="fa fa-angle-double-right"></i>Ver
                más</a>
        </div>
        <div class="novedades__columna">
            <div class="novedades__imagen"><img src="{!! asset('recursos/img/noticias/projects.jpg') !!}" alt="" class="imagen"></div>
            <h4>22 / 07 / 2020</h4>
            <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin
                vehicula tristique interdum. Nam gravida magna sit amet est venenatis, vitae pretium neque
                volutpat.</p>
            <a class="novedades__link" href="{{url('noticias_info',array('tipo'=>'publicaciones','id'=>'1'))}}" target="_blank"><i class="fa fa-angle-double-right"></i>Ver
                más</a>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="section__titulo animado">Contáctenos</h2>
        <h3 class="section__description animado">Escríbenos, ponte en contacto.</h3>
        <div class="contact__columna animadoIzquierda">
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
        <div class="contact__columna__derecha animadoDerecha">
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{!! asset('recursos/js/swiper-bundle.min.js') !!}"></script>
    <script src="{!! asset('recursos/js/validacion-message.js') !!}"></script>
    <script src="{!! asset('recursos/js/slider.js') !!}"></script>
    <script src="{!! asset('recursos/js/main.js') !!}"></script>
    <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(124637)</script> 
@endsection