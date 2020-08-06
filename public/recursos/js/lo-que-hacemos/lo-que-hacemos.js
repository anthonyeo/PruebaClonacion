
var btn_voluntariado = document.getElementById('navegador__menu__voluntariado');
var btn_proyectos = document.getElementById('navegador__menu__proyectos');
var contenido_proyectos = document.getElementById('proyectos');
var contenido_voluntariado = document.getElementById('voluntariado');
var descripcion_proyectos = document.getElementById('navedador__descripcion_proyectos');
var descripcion_voluntariado = document.getElementById('navedador__descripcion_voluntariado');
var contenido_informacion = document.getElementById('informacion');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function peticion(url) {
    fetch(url, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    })
    .then(function(htmlContent) {
        if(url=='/Voluntariado_contenido' || url=='/Proyecto_contenido'){
            contenido_proyectos.style.display='none';
            contenido_voluntariado.style.display='none';
            contenido_informacion.style.display='grid';

            var contentdiv = document.getElementById("informacion");
        }else if(url=='/proyectos_tipo'){
            descripcion_proyectos.style.display='block';
            contenido_proyectos.style.display='grid';
            descripcion_voluntariado.style.display='none';
            contenido_voluntariado.style.display='none';
        
            contenido_informacion.style.display='none';
        
            btn_proyectos.classList.add('select_menu');
            btn_voluntariado.classList.remove('select_menu');

            var contentdiv = document.getElementById("proyectos");
        }else{
            descripcion_voluntariado.style.display='block';
            contenido_voluntariado.style.display='grid';
            descripcion_proyectos.style.display='none';
            contenido_proyectos.style.display='none';
        
            contenido_informacion.style.display='none';
        
            btn_voluntariado.classList.add('select_menu');
            btn_proyectos.classList.remove('select_menu');

            var contentdiv = document.getElementById("voluntariado");
        }
        contentdiv.innerHTML = htmlContent;
    }).catch(function(err) {
        alert('error');
    });

}

