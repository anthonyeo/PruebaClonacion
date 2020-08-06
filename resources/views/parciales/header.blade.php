<header class="header" id="header">

    <div class="navegador-top-color">
        <div class="contenedor">
            <div class="navegador-top">
                <div class="navegador-top__contacto">
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Av. Libertadores 123 - San Isidro</li>
                        <li><i class="fas fa-phone-alt"></i> (+51) 987 654 321</li>
                        <li><i class="fas fa-envelope"></i> miempresa@xyz.com</li>
                    </ul>
                </div>
                <div></div>
                <div class="navegador-top__sociales">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="navegador-color">
        <div class="contenedor">
            <div class="navegador">
                <h1 class="logo">-logotipo-</h1>
                <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
                <nav class="nav" id="nav">
                    <ul class="menu">
                        <li class="menu__item {{setAction('inicio')}}"><a class="menu__link" href="{{route('inicio')}}">Inicio</a></li>
                        <li class="menu__item <?php if(request()->routeIs('nosotros') || request()->routeIs('nuestro_equipo') || request()->routeIs('historia') ){ echo 'link__select';} ?> "><a class="menu__link" href="#">Nosotros</a>
                            <ul>
                                <li class="menu__item2"><a class="menu__link2" href="{{route('nosotros')}}">¿Quienes somos?</a>
                                <li class="menu__item2"><a class="menu__link2" href="{{route('nuestro_equipo')}}">Nuestro Equipo</a>
                                <li class="menu__item2"><a class="menu__link2" href="{{route('historia')}}">Historia</a>
                            </ul>
                        </li>
                        <li class="menu__item <?php if(request()->routeIs('proyectos') || request()->routeIs('voluntariado') ){ echo 'link__select';} ?> "><a class="menu__link" href="#">Lo que hacemos</a>
                            <ul>
                                <li class="menu__item2"><a class="menu__link2" href="{{url('lo_que_hacemos','proyectos')}}">Proyectos</a>
                                <li class="menu__item2"><a class="menu__link2" href="{{url('lo_que_hacemos','voluntariado')}}">Voluntariado</a>
                            </ul>
                        </li>
                        <li class="menu__item {{setAction('nuestros_aliados')}}"><a class="menu__link" href="{{route('nuestros_aliados')}}">Nuestros Aliados</a></li>

                        <li class="menu__item <?php if(request()->routeIs('eventos') || request()->routeIs('publicaciones') ){ echo 'link__select';} ?> "><a class="menu__link" href="#">Noticias</a>
                            <ul>
                                <li class="menu__item2"><a class="menu__link2" href="{{url('noticias','eventos')}}">Eventos</a>
                                <li class="menu__item2"><a class="menu__link2" href="{{url('noticias','publicaciones')}}">Publicaciones</a>
                            </ul>
                        </li>
                        <li class="menu__item {{setAction('contactenos')}}"><a class="menu__link" href="{{route('contactenos')}}">Contáctenos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
</header>