
var btn_todo = document.getElementById('navegador__menu__todos');
var btn_logistica = document.getElementById('navegador__menu__logistica');
var btn_consumo = document.getElementById('navegador__menu__consumo');
var btn_energia = document.getElementById('navegador__menu__energia');
var btn_servicios = document.getElementById('navegador__menu__servicios');


var seccion_logistica =document.getElementById('logistica');
var seccion_logistica1 =document.getElementById('logistica1');
var seccion_servicios =document.getElementById('servicios');
var seccion_consumo1 =document.getElementById('consumo1');
var seccion_servicios2 =document.getElementById('servicios2');
var seccion_servicios3 =document.getElementById('servicios3');
var seccion_consumo =document.getElementById('consumo');

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
        if(url=='/logistica'){
            btn_logistica.classList.add('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_consumo.classList.remove('select_menu');
            btn_energia.classList.remove('select_menu');
            btn_servicios.classList.remove('select_menu');

            seccion_logistica.style.display='block';
            seccion_logistica1.style.display='block';
            seccion_servicios.style.display='none';
            seccion_consumo1.style.display='none';
            seccion_servicios2.style.display='none';
            seccion_servicios3.style.display='none';
            seccion_consumo.style.display='none';

        }else if(url=='/todo'){
            btn_todo.classList.add('select_menu');
            btn_logistica.classList.remove('select_menu');
            btn_consumo.classList.remove('select_menu');
            btn_energia.classList.remove('select_menu');
            btn_servicios.classList.remove('select_menu');

            seccion_logistica.style.display='block';
            seccion_logistica1.style.display='block';
            seccion_servicios.style.display='block';
            seccion_consumo1.style.display='block';
            seccion_servicios2.style.display='block';
            seccion_servicios3.style.display='block';
            seccion_consumo.style.display='block';

        }else if(url=='/consumo'){
            btn_consumo.classList.add('select_menu');
            btn_logistica.classList.remove('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_energia.classList.remove('select_menu');
            btn_servicios.classList.remove('select_menu');

            seccion_logistica.style.display='none';
            seccion_logistica1.style.display='none';
            seccion_servicios.style.display='none';
            seccion_consumo1.style.display='block';
            seccion_servicios2.style.display='none';
            seccion_servicios3.style.display='none';
            seccion_consumo.style.display='block';
        }else if(url=='/energia'){
            btn_energia.classList.add('select_menu');
            btn_consumo.classList.remove('select_menu');
            btn_logistica.classList.remove('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_servicios.classList.remove('select_menu');

            seccion_logistica.style.display='none';
            seccion_logistica1.style.display='none';
            seccion_servicios.style.display='none';
            seccion_consumo1.style.display='none';
            seccion_servicios2.style.display='none';
            seccion_servicios3.style.display='none';
            seccion_consumo.style.display='none';
        }else if(url=='/servicios'){
            btn_servicios.classList.add('select_menu');
            btn_consumo.classList.remove('select_menu');
            btn_logistica.classList.remove('select_menu');
            btn_todo.classList.remove('select_menu');
            btn_energia.classList.remove('select_menu');

            seccion_logistica.style.display='none';
            seccion_logistica1.style.display='none';
            seccion_servicios.style.display='block';
            seccion_consumo1.style.display='none';
            seccion_servicios2.style.display='block';
            seccion_servicios3.style.display='block';
            seccion_consumo.style.display='none';
        }
        
    }).catch(function(err) {
        alert('error');
    });
}

function peticion_noticia(url) {

    fetch(url, {
        method: 'get'
    }).then(function(response) {
        return response.text();
    })
    .then(function(htmlContent) {
        if(url=='/eventos_info' || url=='/publicaciones_info'){
            section_noticias_info.style.display='grid';
            section_noticias.style.display='none';
        }else if(url=='/regresar_info'){
            section_noticias.style.display='grid';
            section_noticias_info.style.display='none';
        }
        var contentdiv = document.getElementById("noticia_info");
        contentdiv.innerHTML = htmlContent;
    }).catch(function(err) {
        alert('error');
    });
}

