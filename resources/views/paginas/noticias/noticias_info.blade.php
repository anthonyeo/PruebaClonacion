<h2 class="section__titulo">Noticias</h2>
<div class="noticia__contenido">
    @if ($datos == 'publicaciones')
        <div class="noticia__contenido__imagen"><img src="{!! asset('recursos/img/noticias/projects.jpg') !!}" alt=""></div>
    @else
        <div class="noticia__contenido__imagen"><img src="{!! asset('recursos/img/fondo-voluntariado2.jpg') !!}" alt=""></div>
    @endif
    
    <h4>22 / 07 / 2020</h4>
    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin lectus magna.
        Pellentesque ullamcorper leo id massa pulvinar, vel aliquet risus dapibus. Quisque vitae
        neque et arcu pretium tristique. Aliquam pharetra, sem eget laoreet facilisis, tortor purus
        fermentum sem, id aliquet nibh lacus non tortor. Donec a vestibulum mauris, non iaculis est.
        Maecenas malesuada id ante quis pretium. Nullam augue urna, sollicitudin non fermentum
        eleifend, rutrum a erat.
    </p>
    <p>
        Phasellus lobortis blandit lectus, vel vehicula est. Morbi at ultrices massa, quis rhoncus urna.
        Pellentesque consectetur porttitor posuere. Morbi elementum dictum quam, et posuere est
        sodales eu. Mauris in nisi sed enim finibus mollis sit amet ac lectus. Vivamus eget erat at
        augue fermentum aliquet quis non mi. Praesent id augue scelerisque, dignissim lectus sit
        amet, ornare ex. Fusce auctor lacinia augue, vel semper libero vestibulum id.
    </p>
    <p>
        Sed a tortor ullamcorper, rhoncus sapien vel, condimentum nisl. In congue tincidunt sagittis.
        Praesent congue sollicitudin nunc vitae convallis. Sed in consequat sem. Phasellus congue
        quam sit amet ligula maximus, scelerisque euismod leo tristique. Integer mollis dolor nec
        arcu gravida placerat non dapibus elit. Sed eget sapien eu ipsum rhoncus pretium nec vitae
        augue. Proin imperdiet sollicitudin commodo.
    </p>
</div>
<div class="noticia_recientes">
    <h2 class="section__titulo">Noticias Recientes</h2>
    <div class="recientes__columna">
        <div class="recientes__columna__imagen"><img src="{!! asset('recursos/img/fondo-voluntariado2.jpg') !!}" alt=""></div>
        <h4>22 / 07 / 2020</h4>
        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin
            vehicula tristique interdum. Nam gravida magna sit amet est venenatis, vitae pretium neque
            volutpat.</p>
        <a class="recientes__columna__link" href="{{url('noticias_info',array('tipo'=>'evento','id'=>'1'))}}" target="_blank" ><i class="fa fa-angle-double-right"></i>Ver más</a>
    </div>
    <div class="recientes__columna">
        <div class="recientes__columna__imagen"><img src="{!! asset('recursos/img/noticias/projects.jpg') !!}" alt=""></div>
        <h4>22 / 07 / 2020</h4>
        <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam.</h3>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin
            vehicula tristique interdum. Nam gravida magna sit amet est venenatis, vitae pretium neque
            volutpat.</p>
        <a class="recientes__columna__link" href="{{url('noticias_info',array('tipo'=>'publicaciones','id'=>'1'))}}" target="_blank" ><i class="fa fa-angle-double-right"></i>Ver más</a>
    </div>
</div>